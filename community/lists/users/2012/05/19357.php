<?
$subject_val = "Re: [OMPI users] possible bug exercised by mpi4py";
include("../../include/msg-header.inc");
?>
<!-- received="Wed May 23 21:57:22 2012" -->
<!-- isoreceived="20120524015722" -->
<!-- sent="Wed, 23 May 2012 21:57:18 -0400 (EDT)" -->
<!-- isosent="20120524015718" -->
<!-- name="Bennet Fauber" -->
<!-- email="bennet_at_[hidden]" -->
<!-- subject="Re: [OMPI users] possible bug exercised by mpi4py" -->
<!-- id="Pine.LNX.4.64.1205232145140.20598_at_joust.gpcc.itd.umich.edu" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="CAEcYPwBMyrtOWBAhrx+LGp_i7RvuyOXp187CGEmCZSS_jiVcnA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] possible bug exercised by mpi4py<br>
<strong>From:</strong> Bennet Fauber (<em>bennet_at_[hidden]</em>)<br>
<strong>Date:</strong> 2012-05-23 21:57:18
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19358.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19348.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
In case it is helpful to those who may not have the Intel compilers, these 
<br>
are the libraries against which the two executables of Lisandro's 
<br>
allgather.c get linked:
<br>
<p><p>with Intel compilers:
<br>
=============================================================================
<br>
$ ldd a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fffb7dfd000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /home/software/rhel5/openmpi-1.4.3/intel-11.0/lib/libmpi.so.0 (0x00002b460cec2000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /home/software/rhel5/openmpi-1.4.3/intel-11.0/lib/libopen-rte.so.0 (0x00002b460d198000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /home/software/rhel5/openmpi-1.4.3/intel-11.0/lib/libopen-pal.so.0 (0x00002b460d400000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003f6a200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003f6fe00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003f74600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003f6a600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003f6ae00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003f69e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libimf.so =&gt; /usr/caen/intel-11.0/fc/11.0.074/lib/intel64/libimf.so (0x00002b460d69f000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libsvml.so =&gt; /usr/caen/intel-11.0/fc/11.0.074/lib/intel64/libsvml.so (0x00002b460d9f6000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libintlc.so.5 =&gt; /usr/caen/intel-11.0/fc/11.0.074/lib/intel64/libintlc.so.5 (0x00002b460dbb3000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libgcc_s.so.1 =&gt; /home/software/rhel5/gcc/4.6.2/lib64/libgcc_s.so.1 (0x00002b460dcf0000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003f69a00000)
<br>
=============================================================================
<br>
<p><p>with GCC 4.6.2
<br>
=============================================================================
<br>
$ ldd a.out
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;linux-vdso.so.1 =&gt;  (0x00007fff93dfd000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libmpi.so.0 =&gt; /home/software/rhel5/openmpi-1.4.4/gcc-4.6.2/lib/libmpi.so.0 (0x00002ab3ba523000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-rte.so.0 =&gt; /home/software/rhel5/openmpi-1.4.4/gcc-4.6.2/lib/libopen-rte.so.0 (0x00002ab3ba7cf000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libopen-pal.so.0 =&gt; /home/software/rhel5/openmpi-1.4.4/gcc-4.6.2/lib/libopen-pal.so.0 (0x00002ab3baa1d000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libdl.so.2 =&gt; /lib64/libdl.so.2 (0x0000003f6a200000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libnsl.so.1 =&gt; /lib64/libnsl.so.1 (0x0000003f6fe00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libutil.so.1 =&gt; /lib64/libutil.so.1 (0x0000003f74600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libm.so.6 =&gt; /lib64/libm.so.6 (0x0000003f6a600000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libpthread.so.0 =&gt; /lib64/libpthread.so.0 (0x0000003f6ae00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;libc.so.6 =&gt; /lib64/libc.so.6 (0x0000003f69e00000)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/lib64/ld-linux-x86-64.so.2 (0x0000003f69a00000)
<br>
=============================================================================
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- bennet
<br>
<pre>
--
East Hall Technical Services
Mathematics and Psychology Research Computing
University of Michigan
(734) 763-1182
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="19358.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>Previous message:</strong> <a href="19356.php">Jonathan Dursi: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<li><strong>In reply to:</strong> <a href="19353.php">Lisandro Dalcin: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="19348.php">Jeff Squyres: "Re: [OMPI users] possible bug exercised by mpi4py"</a>
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
