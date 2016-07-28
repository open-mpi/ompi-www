<?
$subject_val = "Re: [OMPI users] libmpi_f90.so.0 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 07:50:25 2010" -->
<!-- isoreceived="20100415115025" -->
<!-- sent="Thu, 15 Apr 2010 07:50:21 -0400" -->
<!-- isosent="20100415115021" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi_f90.so.0 problem" -->
<!-- id="6045A32D-F545-468F-AF22-FF3C6C0BED25_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4BC67724.8010707_at_prismabasic.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] libmpi_f90.so.0 problem<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 07:50:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12633.php">max marconi: "[OMPI users] libmpi_f90.so.0 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="12646.php">max marconi: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Apr 14, 2010, at 10:17 PM, max marconi wrote:
<br>
<p><span class="quotelev1">&gt; I have just installed openmpi on my system and tried to run the example
</span><br>
<span class="quotelev1">&gt; Hello_f90. The following error was generated upon executing.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; : error while loading shared libraries: libmpi_f90.so.0: cannot open
</span><br>
<span class="quotelev1">&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The library with libmpi_f90  is located in /usr/local/lib
</span><br>
<p>The usual cause for this is that the shared library cannot be found at run time.  Can you verify if /usr/local/lib is in your LD_LIBRARY_PATH on all nodes, and/or /usr/local/lib is in the normal run-time linker search paths?
<br>
<p>Note that you might need to check this in a non-interactive rsh/ssh login -- the setups may be different than for interactive logins.
<br>
<p>Also, can you verify that libmpi_f90.so.0 is in /usr/local/lib?  You mentioned &quot;the library with libmpi_f90&quot; -- there should likely be one library and one or more sym links.
<br>
<p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to:
<a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12643.php">Jeff Squyres: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>Previous message:</strong> <a href="12641.php">Werner Van Geit: "Re: [OMPI users] Segmentation fault in mca_btl_tcp"</a>
<li><strong>In reply to:</strong> <a href="12633.php">max marconi: "[OMPI users] libmpi_f90.so.0 problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="12644.php">Prentice Bisbal: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<li><strong>Reply:</strong> <a href="12646.php">max marconi: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
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
