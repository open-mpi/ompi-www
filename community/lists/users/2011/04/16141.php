<?
$subject_val = "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 10:30:41 2011" -->
<!-- isoreceived="20110405143041" -->
<!-- sent="Tue, 5 Apr 2011 23:30:11 +0900" -->
<!-- isosent="20110405143011" -->
<!-- name="Satoi Ogawa" -->
<!-- email="satoi_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)" -->
<!-- id="BANLkTinrC5z8_F6Y0DQoxc7nfOWxT3vSMw_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20110404140843.GB16772_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)<br>
<strong>From:</strong> Satoi Ogawa (<em>satoi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 10:30:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16142.php">mohd naseem: "[OMPI users] deny permission"</a>
<li><strong>Previous message:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>In reply to:</strong> <a href="16105.php">Rob Latham: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello, Rob, and Open MPI users,
<br>
<p>Thank you for your advice.
<br>
I understand that current Open MPI 1.5.3 Win-32bit binary distributed
<br>
from this site
<br>
don't support MPI-IO on NTFS.
<br>
<p>I try to check this problem with using other code.
<br>
The code is the following code:
<br>
<a href="http://www.mcs.anl.gov/research/projects/mpi/usingmpi2/examples/moreio/subarray_c.htm">http://www.mcs.anl.gov/research/projects/mpi/usingmpi2/examples/moreio/subarray_c.htm</a>
<br>
<p>First I insert the following lines after  &quot;MPI_Init( &amp;argc, &amp;argv );&quot; line.
<br>
m = 20;
<br>
n = 30;
<br>
Of course, the name of output file is ... &quot;/pfs/datafile&quot;--&gt;&quot;datafile&quot;.
<br>
It correctly works on Open MPI 1.4.1 on Linux Ubunts 10.04 LTS. I
<br>
found &quot;datafile&quot; after run.
<br>
However, It doesn't work correctly on Open MPI 1.5.3 32bit binary,
<br>
Windows 7 32bit SP1.
<br>
I can't find &quot;datafile&quot;
<br>
<p>Sincerely yours,
<br>
Satoi
<br>
<p><p><p>2011/4/4 Rob Latham &lt;robl_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; On Sat, Apr 02, 2011 at 09:07:55PM +0900, Satoi Ogawa wrote:
</span><br>
<span class="quotelev2">&gt;&gt; Dear Developers and Users,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thank you for your development of Open MPI.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I want to use Open MPI 1.5.3 on Windows 7 32bit, one PC.
</span><br>
<span class="quotelev2">&gt;&gt; But there is something wrong with the part using MPI-2 I/O functions
</span><br>
<span class="quotelev2">&gt;&gt; in my program.
</span><br>
<span class="quotelev2">&gt;&gt; It correctly worked on Open MPI on Linux.
</span><br>
<span class="quotelev2">&gt;&gt; I would very much appreciate any information you could send me.
</span><br>
<span class="quotelev2">&gt;&gt; I can't find it in Open MPI User's Mailing List Archives.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; you probably need to configure OpenMPI so that ROMIO (the MPI-IO
</span><br>
<span class="quotelev1">&gt; library) is built with &quot;NTFS&quot; support.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ==rob
</span><br>
<p><pre>
----
Satoi Ogawa &lt;satoi_at_[hidden]&gt;
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16142.php">mohd naseem: "[OMPI users] deny permission"</a>
<li><strong>Previous message:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>In reply to:</strong> <a href="16105.php">Rob Latham: "Re: [OMPI users] MPI-2 I/O functions (Open MPI 1.5.x on Windows)"</a>
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
