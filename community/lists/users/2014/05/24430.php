<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 17:58:09 2014" -->
<!-- isoreceived="20140516215809" -->
<!-- sent="Fri, 16 May 2014 15:58:04 -0600" -->
<!-- isosent="20140516215804" -->
<!-- name="Douglas L Reeder" -->
<!-- email="dlr1_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="E6B4E000-501B-48AB-93F5-33C2A8D280BA_at_centurylink.net" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAOiaXW0Zs3J4X19_HTvO3DqQz_L+m4CaY0sbCFzY9DRZZwEJ8w_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi configuration error?<br>
<strong>From:</strong> Douglas L Reeder (<em>dlr1_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 17:58:04
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>In reply to:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ben,
<br>
<p>You might want to use module (source forge) to manage paths to different mpi implementations. It is fairly easy to set up and very robust for this type of problem. You would remove contentious application paths from you standard PATH and then use module to switch them in and out as needed.
<br>
<p>Doug Reeder
<br>
On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; My cluster has just upgraded to a new version of MPI, and I'm using an old one. It seems that I'm having trouble compiling due to the compiler wrapper file moving (full error here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev1">&gt; &quot;Cannot open configuration file /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've found the file on the cluster at  /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev1">&gt; I've already corrected one link to mpich -&gt; /opt/apps/openmpi/retired/1.4.4-intel/, which is in the software I'm trying to recompile's lib folder (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I also tried changing $pkgdatadir based on what I read here: 
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; --Ben L
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24430/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>Previous message:</strong> <a href="24429.php">Elken, Tom: "Re: [OMPI users] Question about scheduler support (or is this about cmake now?)"</a>
<li><strong>In reply to:</strong> <a href="24427.php">Ben Lash: "[OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
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
