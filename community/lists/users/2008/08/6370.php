<?
$subject_val = "Re: [OMPI users] bug in MPI_File_get_position_shared ?";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug 17 11:47:42 2008" -->
<!-- isoreceived="20080817154742" -->
<!-- sent="Sun, 17 Aug 2008 17:47:37 +0200" -->
<!-- isosent="20080817154737" -->
<!-- name="Yvan Fournier" -->
<!-- email="yvan.fournier_at_[hidden]" -->
<!-- subject="Re: [OMPI users] bug in MPI_File_get_position_shared ?" -->
<!-- id="1218988057.6916.8.camel_at_quarmall" -->
<!-- inreplyto="mailman.3480.1218889181.9342.users_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] bug in MPI_File_get_position_shared ?<br>
<strong>From:</strong> Yvan Fournier (<em>yvan.fournier_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-08-17 11:47:37
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Maybe in reply to:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks.
<br>
<p>I had also posted the bug on the MPICH2 list, and received an
<br>
aswer from the ROMIO maintainers: the issue seems to be related to
<br>
NFS file locking bugs. I had been testing on an NFS system, and
<br>
when I re-tested under a local (ext3) file system, I did not reproduce
<br>
the bug.
<br>
<p>I had been experimenting with the MPI-IO using explicit offsets,
<br>
individual pointers, and shared pointers, and have workarounds,
<br>
so I'll just avoid shared pointers on NFS.
<br>
<p>Best regards,
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Yvan Fournier
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;EDF R&amp;D
<br>
<p>On Sat, 2008-08-16 at 08:19 -0400, users-request_at_[hidden] wrote:
<br>
<p><span class="quotelev1">&gt; Date: Sat, 16 Aug 2008 08:05:14 -0400
</span><br>
<span class="quotelev1">&gt; From: Jeff Squyres &lt;jsquyres_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] bug in MPI_File_get_position_shared ?
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users &lt;users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Cc: mpich2-maint_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Message-ID: &lt;023F1DB0-8E8D-4C8C-8156-80AE52FF041F_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt; Content-Type: text/plain; charset=US-ASCII; format=flowed; delsp=yes
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 13, 2008, at 7:06 PM, Yvan Fournier wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; I seem to have encountered a bug in MPI-IO, in which
</span><br>
<span class="quotelev2">&gt; &gt; MPI_File_get_position_shared hangs when called by multiple processes  
</span><br>
<span class="quotelev2">&gt; &gt; in
</span><br>
<span class="quotelev2">&gt; &gt; a communicator. It can be illustrated by the following simple test  
</span><br>
<span class="quotelev2">&gt; &gt; case,
</span><br>
<span class="quotelev2">&gt; &gt; in which a file is simply created with C IO, and opened with MPI-IO.
</span><br>
<span class="quotelev2">&gt; &gt; (defining or undefining MY_MPI_IO_BUG on line 5 enables/disables the
</span><br>
<span class="quotelev2">&gt; &gt; bug). From the MPI2 documentation, It seems that all processes  
</span><br>
<span class="quotelev2">&gt; &gt; should be
</span><br>
<span class="quotelev2">&gt; &gt; able to call MPI_File_get_position_shared, but if more than one  
</span><br>
<span class="quotelev2">&gt; &gt; process
</span><br>
<span class="quotelev2">&gt; &gt; uses it, it fails. Setting the shared pointer helps, but this should  
</span><br>
<span class="quotelev2">&gt; &gt; not
</span><br>
<span class="quotelev2">&gt; &gt; be necessary, and the code still hangs (in more complete code, after
</span><br>
<span class="quotelev2">&gt; &gt; writing data).
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; I encounter the same problem with Open MPI 1.2.6 and MPICH2 1.0.7, so
</span><br>
<span class="quotelev2">&gt; &gt; I may have misread the documentation, but I suspect a ROMIO bug.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Bummer.  :-(
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It would be best to report this directly to the ROMIO maintainers via romio-maint_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; .  They lurk on this list, but they may not be paying attention to  
</span><br>
<span class="quotelev1">&gt; every mail.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you wouldn't mind, please CC me on the mail to romio-maint.  Thanks!
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="6371.php">George Bosilca: "Re: [OMPI users] MPI_Type_struct for structs with dynamic arrays"</a>
<li><strong>Previous message:</strong> <a href="6369.php">Steve Wise: "Re: [OMPI users] TCP Bandwidth"</a>
<li><strong>Maybe in reply to:</strong> <a href="6336.php">Yvan Fournier: "[OMPI users] bug in MPI_File_get_position_shared ?"</a>
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
