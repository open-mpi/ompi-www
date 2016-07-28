<?
$subject_val = "[OMPI users] btl_openib_ib_max_inline_data warnings";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Mar 19 16:00:51 2009" -->
<!-- isoreceived="20090319200051" -->
<!-- sent="Thu, 19 Mar 2009 16:02:59 -0400" -->
<!-- isosent="20090319200259" -->
<!-- name="Gary Draving" -->
<!-- email="gbd2_at_[hidden]" -->
<!-- subject="[OMPI users] btl_openib_ib_max_inline_data warnings" -->
<!-- id="49C2A4F3.20308_at_calvin.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="1237450047.8377.22.camel_at_jnysal" -->
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
<strong>Subject:</strong> [OMPI users] btl_openib_ib_max_inline_data warnings<br>
<strong>From:</strong> Gary Draving (<em>gbd2_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-03-19 16:02:59
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Previous message:</strong> <a href="8520.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>In reply to:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Reply:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi All,
<br>
<p>I have written a simple ring program that seems to run fine but I get 
<br>
the following warning even though I am not explicitly defining  the 
<br>
btl_openib_ib_max_inline_data with an MCA parm. I'm only getting the 
<br>
warning in the 3 machines that have the QLE7240, the other 40+ machines 
<br>
with Mellanox cards give no such warning.
<br>
<p><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WARNING: The btl_openib_ib_max_inline_data MCA parameter was used to
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;specify how much inline data should be used, but a device
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;reduced this
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value.  This is not an error; it simply means that your run will use
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;a smaller inline data value than was requested.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local host:           fs2.calvin.edu
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Local device:         ipath0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Requested value:      128
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Value used by device: 0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;--------------------------------------------------------------------------
<br>
<p><p>When I do set the value btl_openib_ib_max_inline_data = 0 in 
<br>
/usr/local/etc/openmpi-mca-params.conf   I get a different warning about 
<br>
the setting being &quot;deprecated&quot;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A deprecated MCA parameter value was specified in an MCA parameter
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;file.  Deprecated MCA parameters should be avoided; they may
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;disappear
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;in future releases.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Deprecated parameter: btl_openib_ib_max_inline_data
<br>
<p>Is there any way I can get rid of these warnings and/or work with these 
<br>
settings to optimize performance.
<br>
<p>As always any help would be greatly appreciated.
<br>
<p>Gary
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="8522.php">Jeff Squyres: "Re: [OMPI users] mpirun exit status"</a>
<li><strong>Previous message:</strong> <a href="8520.php">Rolf Vandevaart: "Re: [OMPI users] OpenMPI 1.3 and SGE 6.2u1"</a>
<li><strong>In reply to:</strong> <a href="8508.php">Nysal Jan: "Re: [OMPI users] selected pml cm, but peer [[2469, 1], 0] on compute-0-0 selected pml ob1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
<li><strong>Reply:</strong> <a href="8528.php">Jeff Squyres: "Re: [OMPI users] btl_openib_ib_max_inline_data warnings"</a>
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
