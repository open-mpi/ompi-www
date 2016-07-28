<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 18:07:33 2014" -->
<!-- isoreceived="20140516220733" -->
<!-- sent="Fri, 16 May 2014 18:07:30 -0400" -->
<!-- isosent="20140516220730" -->
<!-- name="Maxime Boissonneault" -->
<!-- email="maxime.boissonneault_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="53768C22.4040609_at_calculquebec.ca" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="E6B4E000-501B-48AB-93F5-33C2A8D280BA_at_centurylink.net" -->
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
<strong>From:</strong> Maxime Boissonneault (<em>maxime.boissonneault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 18:07:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Instead of using the outdated and not maintained Module environment, why 
<br>
not use Lmod : <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
<br>
<p>It is a drop-in replacement for Module environment that supports all of 
<br>
their features and much, much more, such as :
<br>
- module hierarchies
<br>
- module properties and color highlighting (we use it to higlight 
<br>
bioinformatic modules or tools for example)
<br>
- module caching (very useful for a parallel filesystem with tons of 
<br>
modules)
<br>
- path priorities (useful to make sure personal modules take precendence 
<br>
over system modules)
<br>
- export module tree to json
<br>
<p>It works like a charm, understand both TCL and Lua modules and is 
<br>
actively developped and debugged. There are litteraly new features every 
<br>
month or so. If it does not do what you want, odds are that the 
<br>
developper will add it shortly (I've had it happen).
<br>
<p>Maxime
<br>
<p>Le 2014-05-16 17:58, Douglas L Reeder a &#233;crit :
<br>
<span class="quotelev1">&gt; Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; You might want to use module (source forge) to manage paths to 
</span><br>
<span class="quotelev1">&gt; different mpi implementations. It is fairly easy to set up and very 
</span><br>
<span class="quotelev1">&gt; robust for this type of problem. You would remove contentious 
</span><br>
<span class="quotelev1">&gt; application paths from you standard PATH and then use module to switch 
</span><br>
<span class="quotelev1">&gt; them in and out as needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Doug Reeder
</span><br>
<span class="quotelev1">&gt; On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden] 
</span><br>
<span class="quotelev1">&gt; &lt;mailto:bl10_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; My cluster has just upgraded to a new version of MPI, and I'm using 
</span><br>
<span class="quotelev2">&gt;&gt; an old one. It seems that I'm having trouble compiling due to the 
</span><br>
<span class="quotelev2">&gt;&gt; compiler wrapper file moving (full error here: 
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev2">&gt;&gt; &quot;Cannot open configuration file 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I've found the file on the cluster at 
</span><br>
<span class="quotelev2">&gt;&gt;  /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev2">&gt;&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev2">&gt;&gt; I've already corrected one link to mpich -&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; /opt/apps/openmpi/retired/1.4.4-intel/, which is in the software I'm 
</span><br>
<span class="quotelev2">&gt;&gt; trying to recompile's lib folder 
</span><br>
<span class="quotelev2">&gt;&gt; (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I 
</span><br>
<span class="quotelev2">&gt;&gt; also tried changing $pkgdatadir based on what I read here:
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a> 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Thanks.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --Ben L
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
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
---------------------------------
Maxime Boissonneault
Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
Ph. D. en physique
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24432/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24431.php">Gus Correa: "Re: [OMPI users] Question about scheduler support"</a>
<li><strong>In reply to:</strong> <a href="24430.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
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
