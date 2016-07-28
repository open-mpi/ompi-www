<?
$subject_val = "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Nov  7 13:03:16 2013" -->
<!-- isoreceived="20131107180316" -->
<!-- sent="Thu, 07 Nov 2013 13:03:09 -0500" -->
<!-- isosent="20131107180309" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem" -->
<!-- id="527BD5DD.3040508_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAGR4S9Eo8-BWiHQiMcmAXUhdFP7BzFDsSTF48QY13k9DwFtMYQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-07 13:03:09
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22924.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Steven, Dmytry
<br>
<p>Not sure if this web page is still valid or totally out of date,
<br>
but there it goes anyway, in the hopes that it may help:
<br>
<p><a href="http://www.mcs.anl.gov/research/projects/mpi/mpich1-old/docs/install/node38.htm">http://www.mcs.anl.gov/research/projects/mpi/mpich1-old/docs/install/node38.htm</a>
<br>
<p>On the other hand, one expert seems to dismiss NFS
<br>
for paralllel IO:
<br>
<p><a href="http://www.open-mpi.org/community/lists/users/2008/07/6125.php">http://www.open-mpi.org/community/lists/users/2008/07/6125.php</a>
<br>
<p>I must say that this has been a gray area for me too.
<br>
It would be nice if MPI - or the various MPIs -
<br>
documentation told us a bit more clearly what types of
<br>
underlying file system support MPI parallel IO:
<br>
local disk (ext?, xfs, etc), NFS mounts,
<br>
the various parallel file systems (PVFS/OrangeFS, Lustre,
<br>
GlusterFS, etc).
<br>
And perhaps provide some setup information, plus
<br>
functionality, and performance comparisons.
<br>
<p>My two cents,
<br>
Gus Correa
<br>
<p><p>On 11/07/2013 12:21 PM, Dmitry N. Mikushin wrote:
<br>
<span class="quotelev1">&gt; Not sure if this is related, but:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I've seen a case of performance degradation on NFS and Lustre when
</span><br>
<span class="quotelev1">&gt; writing NetCDF files. The reason was that the file was filled with a
</span><br>
<span class="quotelev1">&gt; loop writing one 4-byte record at once. Performance became close to
</span><br>
<span class="quotelev1">&gt; local hard drive, when I simply introduced buffering of records and
</span><br>
<span class="quotelev1">&gt; writing them to files with one row at once.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - D.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; 2013/11/7 Steven G Johnson&lt;stevenj_at_[hidden]&gt;:
</span><br>
<span class="quotelev2">&gt;&gt; The simple C program attached below hangs on MPI_File_write when I am using an NFS-mounted filesystem.   Is MPI-IO supported in OpenMPI for NFS filesystems?
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm using OpenMPI 1.4.5 on Debian stable (wheezy), 64-bit Opteron CPU, Linux 3.2.51.   I was surprised by this because the problems only started occurring recently when I upgraded my Debian system to wheezy; with OpenMPI in the previous Debian release, output to NFS-mounted filesystems worked fine.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is there any easy way to get this working?  Any tips are appreciated.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Regards,
</span><br>
<span class="quotelev2">&gt;&gt; Steven G. Johnson
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; -----------------------------------------------------------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include&lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; void perr(const char *label, int err)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      char s[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev2">&gt;&gt;      int len;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Error_string(err, s,&amp;len);
</span><br>
<span class="quotelev2">&gt;&gt;      printf(&quot;%s: %d = %s\n&quot;, label, err, s);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_File fh;
</span><br>
<span class="quotelev2">&gt;&gt;      int err;
</span><br>
<span class="quotelev2">&gt;&gt;      err = MPI_File_open(MPI_COMM_WORLD, &quot;tstmpiio.dat&quot;, MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL,&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;      perr(&quot;open&quot;, err);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      const char s[] = &quot;Hello world!\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;      err = MPI_File_write(fh, (void*) s, strlen(s), MPI_CHAR,&amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;      perr(&quot;write&quot;, err);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      err = MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;      perr(&quot;close&quot;, err);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;      MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;      return 0;
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22924.php">Andrus, Brian Contractor: "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>Previous message:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<li><strong>In reply to:</strong> <a href="22921.php">Dmitry N. Mikushin: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
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
