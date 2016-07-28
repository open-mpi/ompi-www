<?
$subject_val = "[OMPI users] MPI IO bug test case for OpenMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Jul  9 06:17:42 2009" -->
<!-- isoreceived="20090709101742" -->
<!-- sent="Thu, 9 Jul 2009 12:17:36 +0200 (CEST)" -->
<!-- isosent="20090709101736" -->
<!-- name="yvan.fournier_at_[hidden]" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="[OMPI users] MPI IO bug test case for OpenMPI 1.3" -->
<!-- id="2137270175.1564281247134656674.JavaMail.root_at_zimbra17-e3.priv.proxad.net" -->
<!-- charset="utf-8" -->
<!-- inreplyto="1631754993.1564231247134650998.JavaMail.root_at_zimbra17-e3.priv.proxad.net" -->
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
<strong>Subject:</strong> [OMPI users] MPI IO bug test case for OpenMPI 1.3<br>
<strong>From:</strong> <a href="mailto:yvan.fournier_at_[hidden]?Subject=Re:%20[OMPI%20users]%20MPI%20IO%20bug%20test%20case%20for%20OpenMPI%201.3"><em>yvan.fournier_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-07-09 06:17:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9894.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9912.php">Jeff Squyres: "Re: [OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="9912.php">Jeff Squyres: "Re: [OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello,
<br>
<p>Some weeks ago, I reported a problem using MPI IO in OpenMPI 1.3,
<br>
which did not occur with OpenMPI 1.2 or MPICH2.
<br>
<p>The bug was encountered with the Code_Saturne CFD tool (<a href="http://www.code-saturne.org">http://www.code-saturne.org</a>),
<br>
and seemed to be an issue with individual file pointers, as another mode using
<br>
explicit offsets worked fine.
<br>
<p>I have finally extracted the read pattern from the complete case, so as to
<br>
generate the simple test case attached. Further testing showed that the
<br>
bug could be reproduced easily using only part of the read pattern,
<br>
so I commented most of the patterns from the original case using #if 0 / #endif.
<br>
<p>The test should be run with an MPI_COMM_WORLD size of 2. Initially,
<br>
rank 0 generates a simple binary file using Posix I/O and
<br>
containing the values 0, 1, 2, ... up to about 300000.
<br>
<p>The file is then opened for reading using MPI IO, and as the values
<br>
expected at a given offset are easily determined, read values are compared
<br>
to expected values, and MPI_Abort is called in case of an error.
<br>
<p>I also added a USE_FILE_TYPE macro definition, which can be undefined
<br>
to &quot;turn off&quot; the bug.
<br>
<p>Basically, I have:
<br>
<p>------------
<br>
<p>#ifdef USE_FILE_TYPE
<br>
&nbsp;&nbsp;MPI_Type_hindexed(1, lengths, disps, MPI_BYTE, &amp;file_type);
<br>
&nbsp;&nbsp;MPI_Type_commit(&amp;file_type);
<br>
&nbsp;&nbsp;MPI_File_set_view(fh, offset, MPI_BYTE, file_type, datarep, MPI_INFO_NULL);
<br>
#else
<br>
&nbsp;&nbsp;MPI_File_set_view(fh, offset+disps[0], MPI_BYTE, MPI_BYTE, datarep, MPI_INFO_NULL);
<br>
#endif
<br>
<p>retval = MPI_File_read_all(fh, buf, (int)(lengths[0]), MPI_BYTE, &amp;status);
<br>
<p>#if USE_FILE_TYPE
<br>
&nbsp;&nbsp;MPI_Type_free(&amp;file_type);
<br>
#endif
<br>
<p>-------------
<br>
<p>Using the file type indexed datatype, I exhibit the bug with both
<br>
versions 1.3.0 and 1.3.2 of OpenMPI.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;Yvan Fournier
<br>
<p><p><p>
<br><hr>
<ul>
<li>text/x-csrc attachment: <a href="http://www.open-mpi.org/community/lists/users/att-9893/iotest.c">iotest.c</a>
</ul>
<!-- attachment="iotest.c" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9894.php">Jeff Squyres: "Re: [OMPI users] Configuration problem or network problem?"</a>
<li><strong>Previous message:</strong> <a href="9892.php">Zou, Lin (GE, Research, Consultant): "Re: [OMPI users] Configuration problem or network problem?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9912.php">Jeff Squyres: "Re: [OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
<li><strong>Reply:</strong> <a href="9912.php">Jeff Squyres: "Re: [OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
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
