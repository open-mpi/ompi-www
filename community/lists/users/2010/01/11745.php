<?
$subject_val = "[OMPI users] Problems Using PVFS2 with OpenMPI";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jan 12 17:15:59 2010" -->
<!-- isoreceived="20100112221559" -->
<!-- sent="Tue, 12 Jan 2010 14:15:54 -0800" -->
<!-- isosent="20100112221554" -->
<!-- name="Evan Smyth" -->
<!-- email="Evan.Smyth_at_[hidden]" -->
<!-- subject="[OMPI users] Problems Using PVFS2 with OpenMPI" -->
<!-- id="4B4CF49A.50103_at_dreamworks.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>Subject:</strong> [OMPI users] Problems Using PVFS2 with OpenMPI<br>
<strong>From:</strong> Evan Smyth (<em>Evan.Smyth_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-01-12 17:15:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I am unable to use PVFS2 with OpenMPI in a simple test program. My
<br>
configuration is given below. I'm running on RHEL5 with GigE (probably not
<br>
important).
<br>
<p>OpenMPI 1.4 (had same issue with 1.3.3) is configured with
<br>
./configure --prefix=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs \
<br>
--enable-mpi-threads --with-io-romio-flags=&quot;--with-filesystems=pvfs2+ufs+nfs&quot;
<br>
<p>PVFS 2.8.1 is configured to install in the default location (/usr/local) with
<br>
./configure --with-mpi=/work/rd/evan/archives/openmpi/openmpi/1.4/enable_pvfs
<br>
<p>I build and install these (in this order) and setup my PVFS2 space using
<br>
instructions at pvfs.org. I am able to use this space using the
<br>
/usr/local/bin/pvfs2-ls types of commands. I am simply running a 2-server
<br>
config (2 data servers and the same 2 hosts are metadata servers). As I say,
<br>
manually, this all seems fine (even when I'm not root). It may be relevant that
<br>
I am *not* using the kernel interface for PVFS2 as I am just trying to get a
<br>
better understanding of how this works.
<br>
<p>It is perhaps relevant that I have not had to explicitly tell OpenMPI where I
<br>
installed PVFS. I have told PVFS where I installed OpenMPI, though. This does
<br>
seem slightly odd but there does not appear to be a way of telling OpenMPI this
<br>
information. Perhaps it is not needed.
<br>
<p>In any event, I then build my test program against this OpenMPI and in that
<br>
program I have the following call sequence (i is 0 and where mntPoint is the
<br>
path to my pvfs2 mount point -- I also tried prefixing a &quot;pvfs2:&quot; in the front
<br>
of this as I read somewhere that that was optional).
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sprintf(aname, &quot;%s/%d.fdm&quot;, mntPoint, i);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;for(int j = 0; j &lt; numFloats; j++) buf[j] = (float)i;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int retval = MPI_SUCCESS;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;if(MPI_SUCCESS == (retval = MPI_File_open(MPI_COMM_SELF, aname,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_RDWR|MPI_MODE_CREATE|MPI_MODE_UNIQUE_OPEN,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_INFO_NULL, &amp;fh)))
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_write(fh, (void*)buf, numFloats, MPI_FLOAT,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_STATUS_IGNORE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_File_close(&amp;fh);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;} else {
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;int errBufferLen;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;char errBuffer[MPI_MAX_ERROR_STRING];
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_Error_string(retval, errBuffer, &amp;errBufferLen);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fprintf(stdout,&quot;%d: open error on %s with code %s\n&quot;, rank,
<br>
aname, 			errBuffer);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;}
<br>
<p>Which will only execute on one of my ranks (the way I'm running it). No matter
<br>
what I try, the MPI_File_open call fails with an MPI_ERR_ACCESS error code.
<br>
This suggests a permission problem but I am able to manually cp and rm from the
<br>
&nbsp;&nbsp;&nbsp;pvfs2 space without problem so I am not at all clear on what the permission
<br>
problem is. My access flags look fine to me (the MPI_MODE_UNIQUE_OPEN flag
<br>
makes no difference in this case as I'm only opening a single file anyway). If
<br>
I write this file to shared NFS storage, all is &quot;fine&quot; (obviously, I do not
<br>
consider that a permanent solution, though).
<br>
<p>Does anyone have any idea why this is not working? Alternately or in addition,
<br>
does anyone have step-by-step instructions for how to build and set up PVFS2
<br>
with OpenMPI as well as an example program because this is the first time I've
<br>
attempted this so I may well be doing something wrong.
<br>
<p>Thanks in advance,
<br>
Evan
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="11746.php">cjohnson_at_[hidden]: "[OMPI users] Windows CMake build problems ..."</a>
<li><strong>Previous message:</strong> <a href="11744.php">Ralph Castain: "Re: [OMPI users] problem with progress thread and orte"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11750.php">Jeff Squyres: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
<li><strong>Reply:</strong> <a href="11752.php">Rob Latham: "Re: [OMPI users] Problems Using PVFS2 with OpenMPI"</a>
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
