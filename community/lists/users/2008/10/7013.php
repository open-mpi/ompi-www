<?
$subject_val = "Re: [OMPI users] The --with-sge option";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Oct 17 11:44:35 2008" -->
<!-- isoreceived="20081017154435" -->
<!-- sent="Fri, 17 Oct 2008 11:44:26 -0400" -->
<!-- isosent="20081017154426" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] The --with-sge option" -->
<!-- id="0175E742-F523-4133-B536-85F8BD35B4F0_at_cisco.com" -->
<!-- charset="WINDOWS-1252" -->
<!-- inreplyto="16AE1027F52DD64CB278BD8950529B63021000DE_at_UABEXMB5.ad.uab.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] The --with-sge option<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-10-17 11:44:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7014.php">Paul Kapinos: "[OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Previous message:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Oct 16, 2008, at 12:06 PM, Mike Hanby wrote:
<br>
<p><span class="quotelev1">&gt; I&#146;m compiling 1.2.8 on a system with SGE 6.1u4 and came across the  
</span><br>
<span class="quotelev1">&gt; &#147;--with-sge&#148; option on a Grid Engine posting.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A couple questions:
</span><br>
<span class="quotelev1">&gt; 1.  I don&#146;t see --with-sge mentioned in the &#147;./configure --help&quot;  
</span><br>
<span class="quotelev1">&gt; output, nor can I find much reference to it on the open-mpi site, is  
</span><br>
<span class="quotelev1">&gt; this option really implemented? What does it do?
</span><br>
<p>Sorry -- this is an option for OMPI v1.3 and later; it doesn't exist  
<br>
in the v1.2 series.
<br>
<p>[8:31] svbu-mpi:~/svn/ompi4 % ./configure --help |&amp; grep sge
<br>
&nbsp;&nbsp;&nbsp;--with-sge              Build SGE or Grid Engine support (default:  
<br>
no)
<br>
<p>So in the v1.3 series, using --without-sge will disable OMPI from  
<br>
understanding SGE host lists, etc.
<br>
<p><span class="quotelev1">&gt; 2.  After compiling openmpi providing the --with-sge switch I ran  
</span><br>
<span class="quotelev1">&gt; the ompi_info binary and grep&#146;d for sge in the output, there isn&#146;t  
</span><br>
<span class="quotelev1">&gt; any reference, should there be if the option was successfully passed  
</span><br>
<span class="quotelev1">&gt; to configure?
</span><br>
<p>&nbsp;From your second mail:
<br>
<p><span class="quotelev1">&gt; I did find the following in ompi_info:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; MCA ras: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt; MCA pls: gridengine (MCA v1.0, API v1.3, Component v1.2.7)
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; However I see that in an ompi_info built without using the --with- 
</span><br>
<span class="quotelev1">&gt; sge switch.
</span><br>
<p>Per above, that should be ok in the 1.2 series.
<br>
<p><span class="quotelev1">&gt; Also, since I'm building 1.2.8, shouldn't those versions after  
</span><br>
<span class="quotelev1">&gt; Component reflect 1.2.8?
</span><br>
<p>Yes, actually, they should...  That's somewhat concerning.
<br>
<p><span class="quotelev1">&gt; I set the PATH and LD_LIBRARY_PATH to point to the temp location of  
</span><br>
<span class="quotelev1">&gt; my new build and it still reports 1.2.7.
</span><br>
<p><p>You might want to double check your setup.  Since OMPI uses plugins,  
<br>
it can be each to accidentally mix versions by installing one over  
<br>
another, etc.
<br>
<p>Note that the output from configure will also indicate whether it's  
<br>
going to build SGE support, as well.  Look in the stdout of configure  
<br>
and search for &quot;gridengine&quot;.
<br>
<p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7014.php">Paul Kapinos: "[OMPI users] OpenMPI 1.2.8 on Solaris: configure problems"</a>
<li><strong>Previous message:</strong> <a href="7012.php">Terry Frankcombe: "Re: [OMPI users] Debian MPI -- mpirun missing"</a>
<li><strong>In reply to:</strong> <a href="7002.php">Mike Hanby: "[OMPI users] The --with-sge option"</a>
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
