<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 07:58:40 2009" -->
<!-- isoreceived="20090802115840" -->
<!-- sent="Sun, 02 Aug 2009 13:57:50 +0200" -->
<!-- isosent="20090802115750" -->
<!-- name="Dominik T&#225;borsk&#253;" -->
<!-- email="bremby_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="1249214273.3831.5.camel_at_eddy" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="4A7573E3.3070308_at_gmx.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob<br>
<strong>From:</strong> Dominik T&#225;borsk&#253; (<em>bremby_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 07:57:50
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10167.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10167.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Tomislav,
<br>
<p>I also had this issue. When you try to trace it, you'll find out that
<br>
when you manually connect to a machine and immediately execute a
<br>
command, it will inherit your environment, not the environment of the
<br>
node. See:
<br>
$ ssh node1 &amp;&amp; echo $PATH
<br>
<p>This will echo the PATH on your computer, the master one, not the node.
<br>
But if you do this:
<br>
$ ssh node1
<br>
node1$ echo $PATH
<br>
<p>it will echo the PATH on your node.
<br>
Solution to this is to write the path to the executables and path to
<br>
libraries to the variables you have set on your own computer, tha
<br>
master.
<br>
<p>Let me know how that works for you!
<br>
<p>Dr. Eddy
<br>
<p><p>Tomislav Maric p&#195;&#173;&#197;&#161;e v Ne 02. 08. 2009 v 13:09 +0200:
<br>
<span class="quotelev1">&gt; Prasadcse Perera wrote:
</span><br>
<span class="quotelev2">&gt; &gt; Hi,
</span><br>
<span class="quotelev2">&gt; &gt; One workaround is you can define PATH and LD_LIBRARY_PATH in your common
</span><br>
<span class="quotelev2">&gt; &gt; .bashrc and have a resembling  paths of installation in two nodes. This
</span><br>
<span class="quotelev2">&gt; &gt; works for me nicely with my three node installation :).
</span><br>
<span class="quotelev2">&gt; &gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you very much for the advice. Actually I'm running OpenFOAM (read:
</span><br>
<span class="quotelev1">&gt; a program parallelized to run with Open MPI) from SLAX Live DVD, so the
</span><br>
<span class="quotelev1">&gt; installation paths are identical, as well as everything else.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've added commands that set enviromental variables in .bashrc on both
</span><br>
<span class="quotelev1">&gt; nodes, but you mention &quot;common .bashrc&quot;. Common in what way? I'm sorry
</span><br>
<span class="quotelev1">&gt; for newbish question, again, I'm supposed to be a Mechanical Engineer.
</span><br>
<span class="quotelev1">&gt; :))))
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; OpenFOAM toolkit carries a separate directory for third-party support
</span><br>
<span class="quotelev1">&gt; software. In this directory there are programs for postprocessing
</span><br>
<span class="quotelev1">&gt; simulation results and analyze data and Open MPI. Therefore, in my case,
</span><br>
<span class="quotelev1">&gt; Open MPI is built in a separate directory and the build is automated.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; After the build of both programs, there is a special bashrc located in
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; some/path/OpenFOAM/OpenFOAM-1.5-dev/etc/
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; that sets all the variables needed to use Open FOAM, such as
</span><br>
<span class="quotelev1">&gt; FOAM_TUTORIALS (where are the tutorials), FOAM_RUN (where is the working
</span><br>
<span class="quotelev1">&gt; dir), WM_COMPILER (what compiler to use), etc. This bashrc also sets
</span><br>
<span class="quotelev1">&gt; LD_LIBRARY_PATH and PATH so that locally installed Open MPI can be found.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I've tried this installation on the Live DVD on my laptop with two
</span><br>
<span class="quotelev1">&gt; cores, decomposed the case and ran the simulation in parallel without a
</span><br>
<span class="quotelev1">&gt; problem.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I hope this information is more helpful.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Best regards,
</span><br>
<span class="quotelev1">&gt; Tomislav
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
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10167.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10167.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
