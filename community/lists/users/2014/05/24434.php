<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 18:27:13 2014" -->
<!-- isoreceived="20140516222713" -->
<!-- sent="Fri, 16 May 2014 17:26:53 -0500" -->
<!-- isosent="20140516222653" -->
<!-- name="Ben Lash" -->
<!-- email="bl10_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="CAOiaXW09rL-DwrtBNEMpfsJjRA6tkFXc9pdhe6NmbtE4JJ8=LQ_at_mail.gmail.com" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="53768C22.4040609_at_calculquebec.ca" -->
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
<strong>From:</strong> Ben Lash (<em>bl10_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 18:26:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
I'm not sure I have the ability to implement a different module management
<br>
system, I am using a university cluster. We have a module system, and I am
<br>
beginning to suspect that maybe it wasn't updated during the upgrade. I have
<br>
module list
<br>
..other modules....openmpi/1.4.4
<br>
Perhaps this is still trying to go to the old source location? How would I
<br>
check? Is there an easy way around it if it is wrong? Thanks again!
<br>
<p><p>On Fri, May 16, 2014 at 5:07 PM, Maxime Boissonneault &lt;
<br>
maxime.boissonneault_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt;  Instead of using the outdated and not maintained Module environment, why
</span><br>
<span class="quotelev1">&gt; not use Lmod : <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It is a drop-in replacement for Module environment that supports all of
</span><br>
<span class="quotelev1">&gt; their features and much, much more, such as :
</span><br>
<span class="quotelev1">&gt; - module hierarchies
</span><br>
<span class="quotelev1">&gt; - module properties and color highlighting (we use it to higlight
</span><br>
<span class="quotelev1">&gt; bioinformatic modules or tools for example)
</span><br>
<span class="quotelev1">&gt; - module caching (very useful for a parallel filesystem with tons of
</span><br>
<span class="quotelev1">&gt; modules)
</span><br>
<span class="quotelev1">&gt; - path priorities (useful to make sure personal modules take precendence
</span><br>
<span class="quotelev1">&gt; over system modules)
</span><br>
<span class="quotelev1">&gt; - export module tree to json
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; It works like a charm, understand both TCL and Lua modules and is actively
</span><br>
<span class="quotelev1">&gt; developped and debugged. There are litteraly new features every month or
</span><br>
<span class="quotelev1">&gt; so. If it does not do what you want, odds are that the developper will add
</span><br>
<span class="quotelev1">&gt; it shortly (I've had it happen).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Le 2014-05-16 17:58, Douglas L Reeder a &#195;&#169;crit :
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Ben,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  You might want to use module (source forge) to manage paths to different
</span><br>
<span class="quotelev1">&gt; mpi implementations. It is fairly easy to set up and very robust for this
</span><br>
<span class="quotelev1">&gt; type of problem. You would remove contentious application paths from you
</span><br>
<span class="quotelev1">&gt; standard PATH and then use module to switch them in and out as needed.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Doug Reeder
</span><br>
<span class="quotelev1">&gt;  On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  My cluster has just upgraded to a new version of MPI, and I'm using an
</span><br>
<span class="quotelev1">&gt; old one. It seems that I'm having trouble compiling due to the compiler
</span><br>
<span class="quotelev1">&gt; wrapper file moving (full error here: <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev1">&gt; &quot;Cannot open configuration file
</span><br>
<span class="quotelev1">&gt; /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  I've found the file on the cluster at
</span><br>
<span class="quotelev1">&gt;  /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev1">&gt; How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev1">&gt; I've already corrected one link to mpich -&gt; /opt/apps/openmpi/retired/1.4.4-intel/,
</span><br>
<span class="quotelev1">&gt; which is in the software I'm trying to recompile's lib folder
</span><br>
<span class="quotelev1">&gt; (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I also
</span><br>
<span class="quotelev1">&gt; tried changing $pkgdatadir based on what I read here:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  Thanks.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;  --Ben L
</span><br>
<span class="quotelev1">&gt;  _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing listusers_at_[hidden]<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; ---------------------------------
</span><br>
<span class="quotelev1">&gt; Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; Analyste de calcul - Calcul Qu&#195;&#169;bec, Universit&#195;&#169; Laval
</span><br>
<span class="quotelev1">&gt; Ph. D. en physique
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
<span class="quotelev1">&gt;
</span><br>
<p><p><p><pre>
-- 
--Ben L
</pre>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-24434/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24433.php">Douglas L Reeder: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24432.php">Maxime Boissonneault: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24436.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
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
