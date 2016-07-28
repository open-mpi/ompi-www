<?
$subject_val = "Re: [OMPI users] ROMIO bug reading darrays";
include("../../include/msg-header.inc");
?>
<!-- received="Thu May  8 11:45:19 2014" -->
<!-- isoreceived="20140508154519" -->
<!-- sent="Thu, 8 May 2014 11:45:14 -0400" -->
<!-- isosent="20140508154514" -->
<!-- name="Richard Shaw" -->
<!-- email="jrs65_at_[hidden]" -->
<!-- subject="Re: [OMPI users] ROMIO bug reading darrays" -->
<!-- id="CAN+evmmR_H=G23rg-hm6U54ZJ3WGjcXMjAgN-G+xA5KtnWMVHQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="536AAA3D.4050503_at_mcs.anl.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] ROMIO bug reading darrays<br>
<strong>From:</strong> Richard Shaw (<em>jrs65_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-08 11:45:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24317.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 7 May 2014 17:48, Rob Latham &lt;robl_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Looks like I fixed that late last year.  A slew of &quot;&gt;31 bit transfers&quot;
</span><br>
<span class="quotelev1">&gt; fixes went into the MPICH-3.1 release.  Slurping those changes, which are
</span><br>
<span class="quotelev1">&gt; individually small (using some _x versions of type-inquiry routines here,
</span><br>
<span class="quotelev1">&gt; some MPI_Count promotions there) but pervasive, might give OpenMPI a bit of
</span><br>
<span class="quotelev1">&gt; a headache.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Okay, thanks for clearing that up Rob. I'm glad these fixes to ROMIO have
<br>
been done, hopefully they won't be too much of a headache, and they'll
<br>
become a bit more widespread. In the meantime I'll investigate using MPICH
<br>
3.1 with ROMIO vs. OpenMPI with OMPIO.
<br>
<p>Thanks,
<br>
Richard
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24314/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24315.php">George Bosilca: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>Previous message:</strong> <a href="24313.php">Matthieu Brucher: "Re: [OMPI users] MPI_Alltoall with Vector Datatype"</a>
<li><strong>In reply to:</strong> <a href="24310.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24317.php">Rob Latham: "Re: [OMPI users] ROMIO bug reading darrays"</a>
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
