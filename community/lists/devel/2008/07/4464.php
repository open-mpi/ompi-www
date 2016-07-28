<?
$subject_val = "[OMPI devel] Change in slot_list specification";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul 28 11:36:50 2008" -->
<!-- isoreceived="20080728153650" -->
<!-- sent="Mon, 28 Jul 2008 09:36:42 -0600" -->
<!-- isosent="20080728153642" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="[OMPI devel] Change in slot_list specification" -->
<!-- id="EF3FA145-5B96-4655-8DFC-231DE60A0B00_at_lanl.gov" -->
<!-- charset="US-ASCII" -->
<!-- expires="-1" -->
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<p class="headers">
<strong>Subject:</strong> [OMPI devel] Change in slot_list specification<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-07-28 11:36:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4465.php">Ralph Castain: "[OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4463.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4490.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>Reply:</strong> <a href="4490.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Just an FYI for those of you working with slot_lists.
<br>
<p>Lenny, Jeff and I have changed the mca param associated with how you  
<br>
specify the slot list you want the rank_file mapper to use. This was  
<br>
done to avoid the possibility of ORTE processes such as mpirun and  
<br>
orted accidentally binding themselves to cores. The prior param was  
<br>
identical to the one used to tell MPI procs their core bindings - so  
<br>
if someone ever modified the paffinity system to detect the param and  
<br>
automatically perform the binding, mpirun and orted could both bind  
<br>
themselves to the specified cores...which isn't what we would want.
<br>
<p>The new param is &quot;rmaps_base_slot_list&quot;. To make life easier, we also  
<br>
added a new orterun cmd line option --slot-list which acts as a  
<br>
shorthand for the new mca param.
<br>
<p>Ralph
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4465.php">Ralph Castain: "[OMPI devel] Change in hostfile behavior"</a>
<li><strong>Previous message:</strong> <a href="4463.php">Jeff Squyres: "Re: [OMPI devel] 1.3 build failing on MacOSX"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="4490.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<li><strong>Reply:</strong> <a href="4490.php">Lenny Verkhovsky: "Re: [OMPI devel] Change in slot_list specification"</a>
<!-- reply="end" -->
</ul>
<div class="center">
<table border="2" width="100%" class="links">
<tr>
<th><a href="date.php">Date view</a></th>
<th><a href="index.php">Thread view</a></th>
<th><a href="subject.php">Subject view</a></th>
<th><a href="author.php">Author view</a></th>
</tr>
</table>
</div>
<!-- trailer="footer" -->
<? include("../../include/msg-footer.inc") ?>
