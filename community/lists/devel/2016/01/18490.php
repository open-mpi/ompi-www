<?
$subject_val = "[OMPI devel] file desciptor leak in master";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jan 14 02:57:46 2016" -->
<!-- isoreceived="20160114075746" -->
<!-- sent="Thu, 14 Jan 2016 16:57:41 +0900" -->
<!-- isosent="20160114075741" -->
<!-- name="Gilles Gouaillardet" -->
<!-- email="gilles_at_[hidden]" -->
<!-- subject="[OMPI devel] file desciptor leak in master" -->
<!-- id="569754F5.3000707_at_rist.or.jp" -->
<!-- charset="utf-8" -->
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
<strong>Subject:</strong> [OMPI devel] file desciptor leak in master<br>
<strong>From:</strong> Gilles Gouaillardet (<em>gilles_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-01-14 02:57:41
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18491.php">Gianmario Pozzi: "[OMPI devel] orted-children communication"</a>
<li><strong>Previous message:</strong> <a href="18489.php">Geoffrey Paulsen: "[OMPI devel] Please sign up on wiki if you're coming to Face 2 Face in Dallas Feb 23-25"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph,
<br>
<p>i noticed a file descriptor leak with current master.
<br>
<p>that can be easily reproduced with the loop_spawn test from the 
<br>
ibm/dynamic test suite
<br>
<p>mpirun -np 1 ./loop_spawn
<br>
<p>after a few seconds, you can see the leak via
<br>
lsof -p $(pidof mpirun)
<br>
<p>there is a bunch of files such as
<br>
mpirun  20791 gilles   76u     unix 0xffff8800a087e580      0t0 1066703 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
mpirun  20791 gilles   77u     unix 0xffff88009ad1d2c0      0t0 1066954 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
mpirun  20791 gilles   78u     unix 0xffff8800a087ed00      0t0 1066823 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
mpirun  20791 gilles   79u     unix 0xffff88009ad1cf00      0t0 1066840 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
mpirun  20791 gilles   80u     unix 0xffff8800a087f480      0t0 1068077 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
mpirun  20791 gilles   81u     unix 0xffff88009ad1da40      0t0 1068094 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
mpirun  20791 gilles   82u     unix 0xffff8800a087d680      0t0 1068195 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
mpirun  20791 gilles   83u     unix 0xffff88009ad1de00      0t0 1068212 
<br>
/tmp/openmpi-sessions-1000_at_c7_0/7615/0/0/pmix-20791
<br>
<p><p>in server_switchyard(), i noticed
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (PMIX_FINALIZE_CMD == cmd) {
<br>
[...]
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/* turn off the recv event - we shouldn't hear anything
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;* more from this proc */
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if (peer-&gt;recv_ev_active) {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;event_del(&amp;peer-&gt;recv_event);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;peer-&gt;recv_ev_active = false;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;return rc;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>and it looks like peer-&gt;sd is never closed
<br>
<p>fwiw, i naively closed it here, and i got an other leak (pipes)
<br>
<p>could you please have a look at this ?
<br>
<p>Cheers,
<br>
<p>Gilles
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18491.php">Gianmario Pozzi: "[OMPI devel] orted-children communication"</a>
<li><strong>Previous message:</strong> <a href="18489.php">Geoffrey Paulsen: "[OMPI devel] Please sign up on wiki if you're coming to Face 2 Face in Dallas Feb 23-25"</a>
<!-- nextthread="start" -->
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
