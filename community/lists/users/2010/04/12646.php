<?
$subject_val = "Re: [OMPI users] libmpi_f90.so.0 problem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Apr 15 23:16:26 2010" -->
<!-- isoreceived="20100416031626" -->
<!-- sent="Thu, 15 Apr 2010 23:16:18 -0400" -->
<!-- isosent="20100416031618" -->
<!-- name="max marconi" -->
<!-- email="marconi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] libmpi_f90.so.0 problem" -->
<!-- id="4BC7D682.4060509_at_prismabasic.org" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6045A32D-F545-468F-AF22-FF3C6C0BED25_at_cisco.com" -->
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
<strong>From:</strong> max marconi (<em>marconi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-04-15 23:16:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12642.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Jeff
<br>
<p>Thanks for the suggestion
<br>
<p>It seems that  LD_LIBRARY_PATH was the problem. The examples run now?
<br>
<p>Max
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; On Apr 14, 2010, at 10:17 PM, max marconi wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<span class="quotelev2">&gt;&gt; I have just installed openmpi on my system and tried to run the example
</span><br>
<span class="quotelev2">&gt;&gt; Hello_f90. The following error was generated upon executing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; : error while loading shared libraries: libmpi_f90.so.0: cannot open
</span><br>
<span class="quotelev2">&gt;&gt; shared object file: No such file or directory
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; The library with libmpi_f90  is located in /usr/local/lib
</span><br>
<span class="quotelev2">&gt;&gt;     
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The usual cause for this is that the shared library cannot be found at run time.  Can you verify if /usr/local/lib is in your LD_LIBRARY_PATH on all nodes, and/or /usr/local/lib is in the normal run-time linker search paths?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Note that you might need to check this in a non-interactive rsh/ssh login -- the setups may be different than for interactive logins.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Also, can you verify that libmpi_f90.so.0 is in /usr/local/lib?  You mentioned &quot;the library with libmpi_f90&quot; -- there should likely be one library and one or more sym links.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="12647.php">Ben.Kuppers_at_[hidden]: "Re: [OMPI users] import/export issues on Windows"</a>
<li><strong>Previous message:</strong> <a href="12645.php">Baowei Liu: "Re: [OMPI users] openMPI configure/Installing problem on Mac withgnu-gcc-4.4.3 / gnu-gcc-4.5"</a>
<li><strong>In reply to:</strong> <a href="12642.php">Jeff Squyres: "Re: [OMPI users] libmpi_f90.so.0 problem"</a>
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
