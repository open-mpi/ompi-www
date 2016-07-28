<?
$subject_val = "Re: [OMPI users] MPI IO bug test case for OpenMPI 1.3";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jul 11 08:33:05 2009" -->
<!-- isoreceived="20090711123305" -->
<!-- sent="Sat, 11 Jul 2009 08:33:01 -0400" -->
<!-- isosent="20090711123301" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI IO bug test case for OpenMPI 1.3" -->
<!-- id="7F74F32C-C54F-48F5-9DC2-143613D9E21C_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="2137270175.1564281247134656674.JavaMail.root_at_zimbra17-e3.priv.proxad.net" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI IO bug test case for OpenMPI 1.3<br>
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-11 08:33:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9913.php">John R. Cary: "[OMPI users] default host file ignore?  (also, what limits connections?)"</a>
<li><strong>Previous message:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>In reply to:</strong> <a href="9893.php">yvan.fournier_at_[hidden]: "[OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for the bug report!  I'm hoping that a ROMIO refresh in an  
<br>
upcoming Open MPI version will fix this error.  I've added a link to  
<br>
your post in <a href="https://svn.open-mpi.org/trac/ompi/ticket/1888">https://svn.open-mpi.org/trac/ompi/ticket/1888</a>.
<br>
<p>On Jul 9, 2009, at 6:17 AM, &lt;yvan.fournier_at_[hidden]&gt; &lt;yvan.fournier_at_[hidden] 
<br>
<span class="quotelev1"> &gt; wrote:
</span><br>
<p><span class="quotelev1">&gt; Hello,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Some weeks ago, I reported a problem using MPI IO in OpenMPI 1.3,
</span><br>
<span class="quotelev1">&gt; which did not occur with OpenMPI 1.2 or MPICH2.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The bug was encountered with the Code_Saturne CFD tool (<a href="http://www.code-saturne.org">http://www.code-saturne.org</a> 
</span><br>
<span class="quotelev1">&gt; ),
</span><br>
<span class="quotelev1">&gt; and seemed to be an issue with individual file pointers, as another  
</span><br>
<span class="quotelev1">&gt; mode using
</span><br>
<span class="quotelev1">&gt; explicit offsets worked fine.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I have finally extracted the read pattern from the complete case, so  
</span><br>
<span class="quotelev1">&gt; as to
</span><br>
<span class="quotelev1">&gt; generate the simple test case attached. Further testing showed that  
</span><br>
<span class="quotelev1">&gt; the
</span><br>
<span class="quotelev1">&gt; bug could be reproduced easily using only part of the read pattern,
</span><br>
<span class="quotelev1">&gt; so I commented most of the patterns from the original case using #if  
</span><br>
<span class="quotelev1">&gt; 0 / #endif.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The test should be run with an MPI_COMM_WORLD size of 2. Initially,
</span><br>
<span class="quotelev1">&gt; rank 0 generates a simple binary file using Posix I/O and
</span><br>
<span class="quotelev1">&gt; containing the values 0, 1, 2, ... up to about 300000.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; The file is then opened for reading using MPI IO, and as the values
</span><br>
<span class="quotelev1">&gt; expected at a given offset are easily determined, read values are  
</span><br>
<span class="quotelev1">&gt; compared
</span><br>
<span class="quotelev1">&gt; to expected values, and MPI_Abort is called in case of an error.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I also added a USE_FILE_TYPE macro definition, which can be undefined
</span><br>
<span class="quotelev1">&gt; to &quot;turn off&quot; the bug.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Basically, I have:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; ------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #ifdef USE_FILE_TYPE
</span><br>
<span class="quotelev1">&gt;   MPI_Type_hindexed(1, lengths, disps, MPI_BYTE, &amp;file_type);
</span><br>
<span class="quotelev1">&gt;   MPI_Type_commit(&amp;file_type);
</span><br>
<span class="quotelev1">&gt;   MPI_File_set_view(fh, offset, MPI_BYTE, file_type, datarep,  
</span><br>
<span class="quotelev1">&gt; MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt; #else
</span><br>
<span class="quotelev1">&gt;   MPI_File_set_view(fh, offset+disps[0], MPI_BYTE, MPI_BYTE,  
</span><br>
<span class="quotelev1">&gt; datarep, MPI_INFO_NULL);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; retval = MPI_File_read_all(fh, buf, (int)(lengths[0]), MPI_BYTE,  
</span><br>
<span class="quotelev1">&gt; &amp;status);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; #if USE_FILE_TYPE
</span><br>
<span class="quotelev1">&gt;   MPI_Type_free(&amp;file_type);
</span><br>
<span class="quotelev1">&gt; #endif
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -------------
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Using the file type indexed datatype, I exhibit the bug with both
</span><br>
<span class="quotelev1">&gt; versions 1.3.0 and 1.3.2 of OpenMPI.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;   Yvan Fournier
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; &lt;iotest.c&gt;&lt;ATT5117074.txt&gt;
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9913.php">John R. Cary: "[OMPI users] default host file ignore?  (also, what limits connections?)"</a>
<li><strong>Previous message:</strong> <a href="9911.php">Jeff Squyres: "Re: [OMPI users] Bug: coll_tuned_dynamic_rules_filename and duplicatecommunicators"</a>
<li><strong>In reply to:</strong> <a href="9893.php">yvan.fournier_at_[hidden]: "[OMPI users] MPI IO bug test case for OpenMPI 1.3"</a>
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
