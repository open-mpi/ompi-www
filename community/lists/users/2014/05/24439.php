<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Sat May 17 07:02:36 2014" -->
<!-- isoreceived="20140517110236" -->
<!-- sent="Sat, 17 May 2014 11:02:14 +0000" -->
<!-- isosent="20140517110214" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="A63AAFA0-9759-46B7-A2B9-60AC81AB8319_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="BA69E7B1-1CAA-4589-BFB6-C27BE3263013_at_centurylink.net" -->
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
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-17 07:02:14
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24442.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24442.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ditto -- Lmod looks pretty cool.  Thanks for the heads up.
<br>
<p><p>On May 16, 2014, at 6:23 PM, Douglas L Reeder &lt;dlr1_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; Maxime,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I was unaware of Lmod. Thanks for bringing it to my attention.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Doug
</span><br>
<span class="quotelev1">&gt; On May 16, 2014, at 4:07 PM, Maxime Boissonneault &lt;maxime.boissonneault_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Instead of using the outdated and not maintained Module environment, why not use Lmod : <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It is a drop-in replacement for Module environment that supports all of their features and much, much more, such as : 
</span><br>
<span class="quotelev2">&gt;&gt; - module hierarchies
</span><br>
<span class="quotelev2">&gt;&gt; - module properties and color highlighting (we use it to higlight bioinformatic modules or tools for example)
</span><br>
<span class="quotelev2">&gt;&gt; - module caching (very useful for a parallel filesystem with tons of modules)
</span><br>
<span class="quotelev2">&gt;&gt; - path priorities (useful to make sure personal modules take precendence over system modules)
</span><br>
<span class="quotelev2">&gt;&gt; - export module tree to json
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; It works like a charm, understand both TCL and Lua modules and is actively developped and debugged. There are litteraly new features every month or so. If it does not do what you want, odds are that the developper will add it shortly (I've had it happen). 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Maxime
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Le 2014-05-16 17:58, Douglas L Reeder a &#233;crit :
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Ben,
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; You might want to use module (source forge) to manage paths to different mpi implementations. It is fairly easy to set up and very robust for this type of problem. You would remove contentious application paths from you standard PATH and then use module to switch them in and out as needed.
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Doug Reeder
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; My cluster has just upgraded to a new version of MPI, and I'm using an old one. It seems that I'm having trouble compiling due to the compiler wrapper file moving (full error here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; &quot;Cannot open configuration file /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've found the file on the cluster at  /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; I've already corrected one link to mpich -&gt; /opt/apps/openmpi/retired/1.4.4-intel/, which is in the software I'm trying to recompile's lib folder (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I also tried changing $pkgdatadir based on what I read here: 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Thanks. 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --Ben L
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; -- 
</span><br>
<span class="quotelev2">&gt;&gt; ---------------------------------
</span><br>
<span class="quotelev2">&gt;&gt; Maxime Boissonneault
</span><br>
<span class="quotelev2">&gt;&gt; Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev2">&gt;&gt; Ph. D. en physique
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24440.php">Rob Latham: "Re: [OMPI users] bug in MPI_File_set_view?"</a>
<li><strong>Previous message:</strong> <a href="24438.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24442.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24442.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
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
