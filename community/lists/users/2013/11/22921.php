<?
$subject_val = "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 12:21:10 2013" -->
<!-- isoreceived="20131107172110" -->
<!-- sent="Thu, 7 Nov 2013 18:21:08 +0100" -->
<!-- isosent="20131107172108" -->
<!-- name="Dmitry N. Mikushin" -->
<!-- email="maemarcus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem" -->
<!-- id="CAGR4S9Eo8-BWiHQiMcmAXUhdFP7BzFDsSTF48QY13k9DwFtMYQ_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="6B82A8ECEE3FB3408374DEC3361DBF5F3E48CE633E_at_w92expo5.exchange.mit.edu" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem<br>
<strong>From:</strong> Dmitry N. Mikushin (<em>maemarcus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 12:21:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22920.php">Steven G Johnson: "[OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22920.php">Steven G Johnson: "[OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Not sure if this is related, but:
<br>
<p>I've seen a case of performance degradation on NFS and Lustre when
<br>
writing NetCDF files. The reason was that the file was filled with a
<br>
loop writing one 4-byte record at once. Performance became close to
<br>
local hard drive, when I simply introduced buffering of records and
<br>
writing them to files with one row at once.
<br>
<p>- D.
<br>
<p><p>2013/11/7 Steven G Johnson &lt;stevenj_at_[hidden]&gt;:
<br>
<span class="quotelev1">&gt; The simple C program attached below hangs on MPI_File_write when I am using an NFS-mounted filesystem.   Is MPI-IO supported in OpenMPI for NFS filesystems?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I'm using OpenMPI 1.4.5 on Debian stable (wheezy), 64-bit Opteron CPU, Linux 3.2.51.   I was surprised by this because the problems only started occurring recently when I upgraded my Debian system to wheezy; with OpenMPI in the previous Debian release, output to NFS-mounted filesystems worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Is there any easy way to get this working?  Any tips are appreciated.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Regards,
</span><br>
<span class="quotelev1">&gt; Steven G. Johnson
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev1">&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; void perr(const char *label, int err)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     char s[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev1">&gt;     int len;
</span><br>
<span class="quotelev1">&gt;     MPI_Error_string(err, s, &amp;len);
</span><br>
<span class="quotelev1">&gt;     printf(&quot;%s: %d = %s\n&quot;, label, err, s);
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev1">&gt; {
</span><br>
<span class="quotelev1">&gt;     MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_File fh;
</span><br>
<span class="quotelev1">&gt;     int err;
</span><br>
<span class="quotelev1">&gt;     err = MPI_File_open(MPI_COMM_WORLD, &quot;tstmpiio.dat&quot;, MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev1">&gt;     perr(&quot;open&quot;, err);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     const char s[] = &quot;Hello world!\n&quot;;
</span><br>
<span class="quotelev1">&gt;     MPI_Status status;
</span><br>
<span class="quotelev1">&gt;     err = MPI_File_write(fh, (void*) s, strlen(s), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev1">&gt;     perr(&quot;write&quot;, err);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     err = MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;     perr(&quot;close&quot;, err);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     MPI_Finalize();
</span><br>
<span class="quotelev1">&gt;     return 0;
</span><br>
<span class="quotelev1">&gt; }
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Previous message:</strong> <a href="22920.php">Steven G Johnson: "[OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22920.php">Steven G Johnson: "[OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>Reply:</strong> <a href="22923.php">Gus Correa: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
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
