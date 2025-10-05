class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[][]
     */
    function subsets($nums) {
        sort($nums);
        $arr = [[]];
    
        for($i=0;$i<count($nums);$i++){
            foreach($arr as $value){
                array_push($value,$nums[$i]);
                array_push($arr,$value);
            }
        }
        return $arr;
    }
}
