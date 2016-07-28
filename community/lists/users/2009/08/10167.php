<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 07:09:31 2009" -->
<!-- isoreceived="20090802110931" -->
<!-- sent="Sun, 02 Aug 2009 13:09:23 +0200" -->
<!-- isosent="20090802110923" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A7573E3.3070308_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="610ca1a30908020239x19679e28iadb72eab28346daa_at_mail.gmail.com" -->
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
<strong>From:</strong> Tomislav Maric (<em>tomislav.maric_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-02 07:09:23
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10168.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10166.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10166.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10168.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10168.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prasadcse Perera wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; One workaround is you can define PATH and LD_LIBRARY_PATH in your common
</span><br>
<span class="quotelev1">&gt; .bashrc and have a resembling  paths of installation in two nodes. This
</span><br>
<span class="quotelev1">&gt; works for me nicely with my three node installation :).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<p>Thank you very much for the advice. Actually I'm running OpenFOAM (read:
<br>
a program parallelized to run with Open MPI) from SLAX Live DVD, so the
<br>
installation paths are identical, as well as everything else.
<br>
<p>I've added commands that set enviromental variables in .bashrc on both
<br>
nodes, but you mention &quot;common .bashrc&quot;. Common in what way? I'm sorry
<br>
for newbish question, again, I'm supposed to be a Mechanical Engineer.
<br>
:))))
<br>
<p>OpenFOAM toolkit carries a separate directory for third-party support
<br>
software. In this directory there are programs for postprocessing
<br>
simulation results and analyze data and Open MPI. Therefore, in my case,
<br>
Open MPI is built in a separate directory and the build is automated.
<br>
<p>After the build of both programs, there is a special bashrc located in
<br>
<p>some/path/OpenFOAM/OpenFOAM-1.5-dev/etc/
<br>
<p>that sets all the variables needed to use Open FOAM, such as
<br>
FOAM_TUTORIALS (where are the tutorials), FOAM_RUN (where is the working
<br>
dir), WM_COMPILER (what compiler to use), etc. This bashrc also sets
<br>
LD_LIBRARY_PATH and PATH so that locally installed Open MPI can be found.
<br>
<p>I've tried this installation on the Live DVD on my laptop with two
<br>
cores, decomposed the case and ran the simulation in parallel without a
<br>
problem.
<br>
<p>I hope this information is more helpful.
<br>
<p>Best regards,
<br>
Tomislav
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10168.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10166.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10166.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10168.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10168.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Reply:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
