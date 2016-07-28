<?
$subject_val = "[OMPI users] MPI_File_write hangs on NFS-mounted filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 11:54:57 2013" -->
<!-- isoreceived="20131107165457" -->
<!-- sent="Thu, 7 Nov 2013 11:54:54 -0500" -->
<!-- isosent="20131107165454" -->
<!-- name="Steven G Johnson" -->
<!-- email="stevenj_at_[hidden]" -->
<!-- subject="[OMPI users] MPI_File_write hangs on NFS-mounted filesystem" -->
<!-- id="6B82A8ECEE3FB3408374DEC3361DBF5F3E48CE633E_at_w92expo5.exchange.mit.edu" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] MPI_File_write hangs on NFS-mounted filesystem<br>
<strong>From:</strong> Steven G Johnson (<em>stevenj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 11:54:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
The simple C program attached below hangs on MPI_File_write when I am using an NFS-mounted filesystem.   Is MPI-IO supported in OpenMPI for NFS filesystems?
<br>
<p>I'm using OpenMPI 1.4.5 on Debian stable (wheezy), 64-bit Opteron CPU, Linux 3.2.51.   I was surprised by this because the problems only started occurring recently when I upgraded my Debian system to wheezy; with OpenMPI in the previous Debian release, output to NFS-mounted filesystems worked fine.
<br>
<p>Is there any easy way to get this working?  Any tips are appreciated.
<br>
<p>Regards,
<br>
Steven G. Johnson
<br>
<p>-----------------------------------------------------------------------------------
<br>
#include &lt;stdio.h&gt;
<br>
#include &lt;string.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>void perr(const char *label, int err)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;char s[MPI_MAX_ERROR_STRING];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int len;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(err, s, &amp;len);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;printf(&quot;%s: %d = %s\n&quot;, label, err, s);
<br>
}
<br>
<p>int main(int argc, char **argv)
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Init(&amp;argc, &amp;argv);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_File fh;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;int err;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_File_open(MPI_COMM_WORLD, &quot;tstmpiio.dat&quot;, MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;perr(&quot;open&quot;, err);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;const char s[] = &quot;Hello world!\n&quot;;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI_Status status;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_File_write(fh, (void*) s, strlen(s), MPI_CHAR, &amp;status);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;perr(&quot;write&quot;, err);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;err = MPI_File_close(&amp;fh);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;perr(&quot;close&quot;, err);
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;MPI_Finalize();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;return 0;
<br>
}
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22919.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
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
