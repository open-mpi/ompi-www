<?
$subject_val = "Re: [OMPI users] Problems Using PVFS2 with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Jan 13 08:24:20 2010" -->
<!-- isoreceived="20100113132420" -->
<!-- sent="Wed, 13 Jan 2010 08:24:14 -0500" -->
<!-- isosent="20100113132414" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Problems Using PVFS2 with OpenMPI" -->
<!-- id="41FFF3B8-1DC4-47D4-9680-06841538E966_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4B4CF49A.50103_at_dreamworks.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Problems Using PVFS2 with OpenMPI<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-13 08:24:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11751.php">Luís Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="11745.php">Evan Smyth: "[OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Evan --
<br>
<p>As a first step, can you send your build logs so that we can verify that OMPI+ROMIO built with proper PVFS2 support?  See:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;<a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
<br>
<p><p>On Jan 12, 2010, at 5:15 PM, Evan Smyth wrote:
<br>
<p><span class="quotelev1">&gt; I am unable to use PVFS2 with OpenMPI in a simple test program. My
</span><br>
<span class="quotelev1">&gt; configuration is given below. I'm running on RHEL5 with GigE (probably not
</span><br>
<span class="quotelev1">&gt; important).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenMPI 1.4 (had same issue with 1.3.3) is configured with
</span><br>
<span class="quotelev1">&gt; ./configure --prefix=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs \
</span><br>
<span class="quotelev1">&gt; --enable-mpi-threads --with-io-romio-flags=&quot;--with-filesystems=pvfs2+ufs+nfs&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; PVFS 2.8.1 is configured to install in the default location (/usr/local) with
</span><br>
<span class="quotelev1">&gt; ./configure --with-mpi=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I build and install these (in this order) and setup my PVFS2 space using
</span><br>
<span class="quotelev1">&gt; instructions at pvfs.org. I am able to use this space using the
</span><br>
<span class="quotelev1">&gt; /usr/local/bin/pvfs2-ls types of commands. I am simply running a 2-server
</span><br>
<span class="quotelev1">&gt; config (2 data servers and the same 2 hosts are metadata servers). As I say,
</span><br>
<span class="quotelev1">&gt; manually, this all seems fine (even when I'm not root). It may be relevant that
</span><br>
<span class="quotelev1">&gt; I am *not* using the kernel interface for PVFS2 as I am just trying to get a
</span><br>
<span class="quotelev1">&gt; better understanding of how this works.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is perhaps relevant that I have not had to explicitly tell OpenMPI where I
</span><br>
<span class="quotelev1">&gt; installed PVFS. I have told PVFS where I installed OpenMPI, though. This does
</span><br>
<span class="quotelev1">&gt; seem slightly odd but there does not appear to be a way of telling OpenMPI this
</span><br>
<span class="quotelev1">&gt; information. Perhaps it is not needed.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; In any event, I then build my test program against this OpenMPI and in that
</span><br>
<span class="quotelev1">&gt; program I have the following call sequence (i is 0 and where mntPoint is the
</span><br>
<span class="quotelev1">&gt; path to my pvfs2 mount point -- I also tried prefixing a &quot;pvfs2:&quot; in the front
</span><br>
<span class="quotelev1">&gt; of this as I read somewhere that that was optional).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;           sprintf(aname, &quot;%s/%d.fdm&quot;, mntPoint, i);
</span><br>
<span class="quotelev1">&gt;           for(int j = 0; j &lt; numFloats; j++) buf[j] = (float)i;
</span><br>
<span class="quotelev1">&gt;           int retval = MPI_SUCCESS;
</span><br>
<span class="quotelev1">&gt;           if(MPI_SUCCESS == (retval = MPI_File_open(MPI_COMM_SELF, aname,
</span><br>
<span class="quotelev1">&gt;                               MPI_MODE_RDWR|MPI_MODE_CREATE|MPI_MODE_UNIQUE_OPEN,
</span><br>
<span class="quotelev1">&gt;                                                     MPI_INFO_NULL, &amp;fh)))
</span><br>
<span class="quotelev1">&gt;           {
</span><br>
<span class="quotelev1">&gt;               MPI_File_write(fh, (void*)buf, numFloats, MPI_FLOAT,
</span><br>
<span class="quotelev1">&gt;                         MPI_STATUS_IGNORE);
</span><br>
<span class="quotelev1">&gt;               MPI_File_close(&amp;fh);
</span><br>
<span class="quotelev1">&gt;           } else {
</span><br>
<span class="quotelev1">&gt;               int errBufferLen;
</span><br>
<span class="quotelev1">&gt;               char errBuffer[MPI_MAX_ERROR_STRING];
</span><br>
<span class="quotelev1">&gt;               MPI_Error_string(retval, errBuffer, &amp;errBufferLen);
</span><br>
<span class="quotelev1">&gt;               fprintf(stdout,&quot;%d: open error on %s with code %s\n&quot;, rank,
</span><br>
<span class="quotelev1">&gt; aname,                  errBuffer);
</span><br>
<span class="quotelev1">&gt;           }
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Which will only execute on one of my ranks (the way I'm running it). No matter
</span><br>
<span class="quotelev1">&gt; what I try, the MPI_File_open call fails with an MPI_ERR_ACCESS error code.
</span><br>
<span class="quotelev1">&gt; This suggests a permission problem but I am able to manually cp and rm from the
</span><br>
<span class="quotelev1">&gt;    pvfs2 space without problem so I am not at all clear on what the permission
</span><br>
<span class="quotelev1">&gt; problem is. My access flags look fine to me (the MPI_MODE_UNIQUE_OPEN flag
</span><br>
<span class="quotelev1">&gt; makes no difference in this case as I'm only opening a single file anyway). If
</span><br>
<span class="quotelev1">&gt; I write this file to shared NFS storage, all is &quot;fine&quot; (obviously, I do not
</span><br>
<span class="quotelev1">&gt; consider that a permanent solution, though).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does anyone have any idea why this is not working? Alternately or in addition,
</span><br>
<span class="quotelev1">&gt; does anyone have step-by-step instructions for how to build and set up PVFS2
</span><br>
<span class="quotelev1">&gt; with OpenMPI as well as an example program because this is the first time I've
</span><br>
<span class="quotelev1">&gt; attempted this so I may well be doing something wrong.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks in advance,
</span><br>
<span class="quotelev1">&gt; Evan
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11751.php">Luís Miranda: "[OMPI users] Can't read values with MPI-IO"</a>
<li><strong>Previous message:</strong> <a href="11749.php">Jeff Squyres: "Re: [OMPI users] execution problem on remote nodes with MPI 1.3"</a>
<li><strong>In reply to:</strong> <a href="11745.php">Evan Smyth: "[OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
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
