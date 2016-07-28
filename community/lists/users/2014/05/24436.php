<?
$subject_val = "Re: [OMPI users] openmpi configuration error?";
include("../../include/msg-header.inc");
?>
<!-- received="Fri May 16 18:46:52 2014" -->
<!-- isoreceived="20140516224652" -->
<!-- sent="Fri, 16 May 2014 18:46:51 -0400" -->
<!-- isosent="20140516224651" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi configuration error?" -->
<!-- id="5376955B.4070503_at_ldeo.columbia.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="CAOiaXW09rL-DwrtBNEMpfsJjRA6tkFXc9pdhe6NmbtE4JJ8=LQ_at_mail.gmail.com" -->
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
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-05-16 18:46:51
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 05/16/2014 06:26 PM, Ben Lash wrote:
<br>
<span class="quotelev1">&gt; I'm not sure I have the ability to implement a different module
</span><br>
<span class="quotelev1">&gt; management system, I am using a university cluster. We have a module
</span><br>
<span class="quotelev1">&gt; system, and I am beginning to suspect that maybe it wasn't updated
</span><br>
<span class="quotelev1">&gt; during the upgrade. I have
</span><br>
<span class="quotelev1">&gt; module list
</span><br>
<span class="quotelev1">&gt; ..other modules....openmpi/1.4.4
</span><br>
<span class="quotelev1">&gt; Perhaps this is still trying to go to the old source location? How would
</span><br>
<span class="quotelev1">&gt; I check? Is there an easy way around it if it is wrong? Thanks again!
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Most likely the module openmpi/1.4.4 is out of date.
<br>
You can check it with
<br>
echo $PATH
<br>
If it doesn't point to the &quot;retired&quot; directory, then it is probably out 
<br>
of date.
<br>
<p>Why don't you try to recompile the code
<br>
with the current Open MPI installed in the cluster?
<br>
<p>module avail
<br>
will show everyting, and you can pick the latest, load it,
<br>
and try to recompile the program with that.
<br>
<p>Gus Correa
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Fri, May 16, 2014 at 5:07 PM, Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt; &lt;maxime.boissonneault_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &lt;mailto:maxime.boissonneault_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Instead of using the outdated and not maintained Module environment,
</span><br>
<span class="quotelev1">&gt;     why not use Lmod : <a href="https://www.tacc.utexas.edu/tacc-projects/lmod">https://www.tacc.utexas.edu/tacc-projects/lmod</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It is a drop-in replacement for Module environment that supports all
</span><br>
<span class="quotelev1">&gt;     of their features and much, much more, such as :
</span><br>
<span class="quotelev1">&gt;     - module hierarchies
</span><br>
<span class="quotelev1">&gt;     - module properties and color highlighting (we use it to higlight
</span><br>
<span class="quotelev1">&gt;     bioinformatic modules or tools for example)
</span><br>
<span class="quotelev1">&gt;     - module caching (very useful for a parallel filesystem with tons of
</span><br>
<span class="quotelev1">&gt;     modules)
</span><br>
<span class="quotelev1">&gt;     - path priorities (useful to make sure personal modules take
</span><br>
<span class="quotelev1">&gt;     precendence over system modules)
</span><br>
<span class="quotelev1">&gt;     - export module tree to json
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     It works like a charm, understand both TCL and Lua modules and is
</span><br>
<span class="quotelev1">&gt;     actively developped and debugged. There are litteraly new features
</span><br>
<span class="quotelev1">&gt;     every month or so. If it does not do what you want, odds are that
</span><br>
<span class="quotelev1">&gt;     the developper will add it shortly (I've had it happen).
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Maxime
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     Le 2014-05-16 17:58, Douglas L Reeder a &#233;crit :
</span><br>
<span class="quotelev2">&gt;&gt;     Ben,
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     You might want to use module (source forge) to manage paths to
</span><br>
<span class="quotelev2">&gt;&gt;     different mpi implementations. It is fairly easy to set up and
</span><br>
<span class="quotelev2">&gt;&gt;     very robust for this type of problem. You would remove contentious
</span><br>
<span class="quotelev2">&gt;&gt;     application paths from you standard PATH and then use module to
</span><br>
<span class="quotelev2">&gt;&gt;     switch them in and out as needed.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     Doug Reeder
</span><br>
<span class="quotelev2">&gt;&gt;     On May 16, 2014, at 3:39 PM, Ben Lash &lt;bl10_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt;     &lt;mailto:bl10_at_[hidden]&gt;&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     My cluster has just upgraded to a new version of MPI, and I'm
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     using an old one. It seems that I'm having trouble compiling due
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     to the compiler wrapper file moving (full error here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://pastebin.com/EmwRvCd9">http://pastebin.com/EmwRvCd9</a>)
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     &quot;Cannot open configuration file
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /opt/apps/openmpi/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt&quot;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I've found the file on the cluster at
</span><br>
<span class="quotelev3">&gt;&gt;&gt;      /opt/apps/openmpi/retired/1.4.4-intel/share/openmpi/mpif90-wrapper-data.txt
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     How do I tell the old mpi wrapper where this file is?
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I've already corrected one link to mpich -&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     /opt/apps/openmpi/retired/1.4.4-intel/, which is in the software
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     I'm trying to recompile's lib folder
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     (/home/bl10/CMAQv5.0.1/lib/x86_64/ifort). Thanks for any ideas. I
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     also tried changing $pkgdatadir based on what I read here:
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags">http://www.open-mpi.org/faq/?category=mpi-apps#default-wrapper-compiler-flags</a>
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     Thanks.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     --Ben L
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt;     users mailing list
</span><br>
<span class="quotelev2">&gt;&gt;     users_at_[hidden]  &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt;&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     --
</span><br>
<span class="quotelev1">&gt;     ---------------------------------
</span><br>
<span class="quotelev1">&gt;     Maxime Boissonneault
</span><br>
<span class="quotelev1">&gt;     Analyste de calcul - Calcul Qu&#233;bec, Universit&#233; Laval
</span><br>
<span class="quotelev1">&gt;     Ph. D. en physique
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;     _______________________________________________
</span><br>
<span class="quotelev1">&gt;     users mailing list
</span><br>
<span class="quotelev1">&gt;     users_at_[hidden] &lt;mailto:users_at_[hidden]&gt;
</span><br>
<span class="quotelev1">&gt;     <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; --Ben L
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Previous message:</strong> <a href="24435.php">Gus Correa: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>In reply to:</strong> <a href="24434.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
<li><strong>Reply:</strong> <a href="24437.php">Ben Lash: "Re: [OMPI users] openmpi configuration error?"</a>
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
