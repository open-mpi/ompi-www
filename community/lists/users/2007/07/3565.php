<? include("../../include/msg-header.inc"); ?>
<!-- received="Mon Jul  2 13:49:23 2007" -->
<!-- isoreceived="20070702174923" -->
<!-- sent="Mon, 2 Jul 2007 12:49:27 -0500" -->
<!-- isosent="20070702174927" -->
<!-- name="Adams, Samuel D Contr AFRL/HEDR" -->
<!-- email="Samuel.Adams_at_[hidden]" -->
<!-- subject="[OMPI users] nfs romio" -->
<!-- id="8BF06A36E7AD424197195998D9A0B8E1CD6FFA_at_FBRMLBR01.Enterprise.afmc.ds.af.mil" -->
<!-- charset="US-ASCII" -->
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
<strong>From:</strong> Adams, Samuel D Contr AFRL/HEDR (<em>Samuel.Adams_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-07-02 13:49:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3566.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3568.php">Jeff Squyres: "Re: [OMPI users] nfs romio"</a>
<li><strong>Reply:</strong> <a href="3568.php">Jeff Squyres: "Re: [OMPI users] nfs romio"</a>
<li><strong>Reply:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I wrote a code the other day to MPI IO to write files, and OpenMPI/ROMIO
<br>
seems to be having problems with the NFS server. I have read that NFSv4
<br>
and ROMIO don't perform very well together, but my problem is probably a
<br>
misconfiguration of some kind.  Basically when I use MPI IO to write a
<br>
file on an exported file system, it basically hangs.  If I try to run it
<br>
to a local file system, it works great.  I also get mixed results
<br>
depending on which MPI I am using with our NFS server.  Sometimes my
<br>
code will work ok with some MPI implementations using the same NFS
<br>
server, and other times it will hang like it does with OpenMPI which
<br>
seems odd since I think MPICH, LAM-MPI, and OpenMPI all use ROMIO.
<br>
<p>Anyway, so if anyone can tell me how I should configure my NFS server,
<br>
or OpenMPI to make ROMIO work properly, I would appreciate it.   
<br>
<p>Sam Adams
<br>
General Dynamics Information Technology
<br>
Phone: 210.536.5945
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3566.php">Yip, Elizabeth L: "Re: [OMPI users] Absoft compilation problem"</a>
<li><strong>Previous message:</strong> <a href="3564.php">Jeff Squyres: "Re: [OMPI users] initial setup"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3568.php">Jeff Squyres: "Re: [OMPI users] nfs romio"</a>
<li><strong>Reply:</strong> <a href="3568.php">Jeff Squyres: "Re: [OMPI users] nfs romio"</a>
<li><strong>Reply:</strong> <a href="3584.php">Robert Latham: "Re: [OMPI users] nfs romio"</a>
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
