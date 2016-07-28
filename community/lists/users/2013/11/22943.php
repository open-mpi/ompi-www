<?
$subject_val = "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Nov 11 14:17:22 2013" -->
<!-- isoreceived="20131111191722" -->
<!-- sent="Mon, 11 Nov 2013 19:17:21 +0000" -->
<!-- isosent="20131111191721" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem" -->
<!-- id="7DA34A00-13E5-44F3-8468-D975CA0680AE_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="3259180251469388543_at_unknownmsgid" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-11-11 14:17:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, I tried this sample program on OMPI 1.6.x and 1.7.x, and it worked for me on NFS.
<br>
<p>On Nov 7, 2013, at 12:45 PM, Jeff Hammond &lt;jeff.science_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; That's a relatively old version of OMPI.  Maybe try the latest
</span><br>
<span class="quotelev1">&gt; release? That's always the safe bet since the issue might have been
</span><br>
<span class="quotelev1">&gt; fixed already.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recall that OMPI uses ROMIO so you might try to reproduce with MPICH
</span><br>
<span class="quotelev1">&gt; so you can report it to the people that wrote the MPI-IO code. Of
</span><br>
<span class="quotelev1">&gt; course, this might not be an issue with ROMIO itself.  Trying with
</span><br>
<span class="quotelev1">&gt; MPICH is a good way to verify that.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Jeff
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Sent from my iPhone
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Nov 7, 2013, at 10:55 AM, Steven G Johnson &lt;stevenj_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
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
<span class="quotelev2">&gt;&gt; #include &lt;stdio.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;string.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; #include &lt;mpi.h&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; void perr(const char *label, int err)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   char s[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev2">&gt;&gt;   int len;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Error_string(err, s, &amp;len);
</span><br>
<span class="quotelev2">&gt;&gt;   printf(&quot;%s: %d = %s\n&quot;, label, err, s);
</span><br>
<span class="quotelev2">&gt;&gt; }
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; int main(int argc, char **argv)
</span><br>
<span class="quotelev2">&gt;&gt; {
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Init(&amp;argc, &amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_File fh;
</span><br>
<span class="quotelev2">&gt;&gt;   int err;
</span><br>
<span class="quotelev2">&gt;&gt;   err = MPI_File_open(MPI_COMM_WORLD, &quot;tstmpiio.dat&quot;, MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI_INFO_NULL, &amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;   perr(&quot;open&quot;, err);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   const char s[] = &quot;Hello world!\n&quot;;
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Status status;
</span><br>
<span class="quotelev2">&gt;&gt;   err = MPI_File_write(fh, (void*) s, strlen(s), MPI_CHAR, &amp;status);
</span><br>
<span class="quotelev2">&gt;&gt;   perr(&quot;write&quot;, err);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   err = MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev2">&gt;&gt;   perr(&quot;close&quot;, err);
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;   MPI_Finalize();
</span><br>
<span class="quotelev2">&gt;&gt;   return 0;
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
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22944.php">Jeff Squyres (jsquyres): "Re: [OMPI users] Prototypes for Fortran MPI_ commands using 64-bit	indexing"</a>
<li><strong>Previous message:</strong> <a href="22942.php">Jeff Squyres (jsquyres): "Re: [OMPI users] proper use of MPI_Abort"</a>
<li><strong>In reply to:</strong> <a href="22922.php">Jeff Hammond: "Re: [OMPI users] MPI_File_write hangs on NFS-mounted filesystem"</a>
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
