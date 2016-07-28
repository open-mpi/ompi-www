<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jan  8 17:49:14 2007" -->
<!-- isoreceived="20070108224914" -->
<!-- sent="Mon, 8 Jan 2007 23:49:32 +0100" -->
<!-- isosent="20070108224932" -->
<!-- name="Adrian Knoth" -->
<!-- email="adi_at_[hidden]" -->
<!-- subject="[OMPI devel] NFS race condition in romio" -->
<!-- id="20070108224932.GY6619_at_drcomp.erfurt.thur.de" -->
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
<strong>From:</strong> Adrian Knoth (<em>adi_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-01-08 17:49:32
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Problems with Big ORTE patch in v1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<li><strong>Reply:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>we're facing a NFS race condition if File_Open is called for
<br>
a nonexisting file:
<br>
<p>#include &lt;mpi.h&gt;
<br>
int main(int argc, char *argv[])
<br>
{
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Init(argc, argv);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::File _outputFile;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;double dummy = 42;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;_outputFile = MPI::File::Open(MPI::COMM_WORLD,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&quot;foo&quot;,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MPI_MODE_CREATE | MPI_MODE_WRONLY, MPI::INFO_NULL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_outputFile.Set_errhandler(MPI::ERRORS_ARE_FATAL);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_outputFile.Write(&amp;dummy, 1, MPI::DOUBLE);
<br>
&nbsp;&nbsp;&nbsp;&nbsp;_outputFile.Close();
<br>
&nbsp;&nbsp;&nbsp;&nbsp;MPI::Finalize();
<br>
}
<br>
<p>If run on two or more nodes with shared NFS, it usually fails:
<br>
<p>ADIOI_NFS_OPEN (line 55): **filenoexist fooADIOI_NFS_OPEN (line 55): **filenoexist fooMPI_FILE_CLOSE (line 51): **iobadfh
<br>
ADIO_OPEN (line 273): **oremote_fail
<br>
ADIOI_NFS_OPEN (line 55): **filenoexist fooADIOI_NFS_OPEN (line 55): **filenoexist fooADIOI_NFS_OPEN (line 55): **filenoexist fooADIOI_NFS_OPEN (line 55): **filenoexist foo[amun2:12137] *** An error occurred in MPI_File_write
<br>
[amun2:12137] *** on a NULL file
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
MPI_FILE_CLOSE (line 51): **iobadfh
<br>
[amun2:12137] *** MPI_ERR_FILE: invalid file
<br>
[amun2:12137] *** MPI_ERRORS_ARE_FATAL (goodbye)
<br>
[inge:19493] *** An error occurred in MPI_File_write
<br>
[inge:19493] *** on a NULL file
<br>
[amun4:10186] *** An error occurred in MPI_File_write
<br>
[amun4:10186] *** on a NULL file
<br>
[amun3:11146] *** An error occurred in MPI_File_write
<br>
[amun3:11146] *** on a NULL file
<br>
<p><p>(There are chances that this code will succeed if it is run on only two
<br>
&nbsp;nodes and rank=0 is the NFS client and rank=1 is the NFS server)
<br>
<p>The file is created on rank 0, closed and later reopened by all N
<br>
processes as described in ad_open.c around line 163. Unfortunately,
<br>
NFS isn't fast enough to inform all clients about the new file.
<br>
Also sync-mounting the share doesn't solve this issue.
<br>
<p>A well-placed system(&quot;ls&quot;) in the code remedies the problem.
<br>
To avoid this noisy call, I've reimplemented this ls with
<br>
open(&quot;.&quot;) and stat(&quot;.&quot;), but stat() isn't necessary.
<br>
<p>The attached patch fixes this problem, but perhaps there is
<br>
a better way to do it. What about upstream? (MPICH)?
<br>
<p>(I guess NFS is widely used, so there should be more people
<br>
&nbsp;facing this issue).
<br>
<p><p><pre>
-- 
Cluster and Metacomputing Working Group
Friedrich-Schiller-Universit&#228;t Jena, Germany
private: <a href="http://adi.thur.de">http://adi.thur.de</a>

</pre>
<hr>
<ul>
<li>text/plain attachment: <a href="http://www.open-mpi.org/community/lists/devel/att-1246/romio.patch">romio.patch</a>
</ul>
<!-- attachment="romio.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<li><strong>Previous message:</strong> <a href="1245.php">Jeff Squyres: "Re: [OMPI devel] [devel-core] Problems with Big ORTE patch in v1.2"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
<li><strong>Reply:</strong> <a href="1247.php">Adrian Knoth: "Re: [OMPI devel] NFS race condition in romio"</a>
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
