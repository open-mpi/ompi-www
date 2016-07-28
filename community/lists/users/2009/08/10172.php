<?
$subject_val = "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob";
include("../../include/msg-header.inc");
?>
<!-- received="Sun Aug  2 10:10:04 2009" -->
<!-- isoreceived="20090802141004" -->
<!-- sent="Sun, 02 Aug 2009 16:09:56 +0200" -->
<!-- isosent="20090802140956" -->
<!-- name="Tomislav Maric" -->
<!-- email="tomislav.maric_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob" -->
<!-- id="4A759E34.9000802_at_gmx.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="610ca1a30908020507v692e11e2h624e0c0fcf634ce2_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2009-08-02 10:09:56
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10173.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Prasadcse Perera wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt; common bashrc meant if the /home is network mounted so ignore that I
</span><br>
<span class="quotelev1">&gt; guess. Have you tried  adding
</span><br>
<span class="quotelev1">&gt;  . $HOME/OpenFOAM/OpenFOAM-1.5.x/etc/bashrc  to your ~/.bashrc on nodes
</span><br>
<span class="quotelev1">&gt; ? This will append the configurations you need from the bashrc file
</span><br>
<span class="quotelev1">&gt; located inside the directory.
</span><br>
<p>I've done that and still no go. I've tried it before, when I read that
<br>
bash reads .bashrc when invoked in non-interactive mode.
<br>
<p>I'm not at all certain I understand the way bash works anymore.
<br>
<p>Here's what I've been trying:
<br>
<p>1) bash runs .bashrc if envoked in non-interactive (--login or no
<br>
--login mode)
<br>
<p>2) i've added this line to .bashrc on my master node
<br>
<p>&nbsp;&nbsp;&nbsp;echo Hello, I'm your .bashrc file, you're running non-interactive bash
<br>
<p><p>3) bash runs in non-interactive mode when you write and execute a
<br>
script, so I've written a script hello.sh
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;echo Hello!!!
<br>
<p>and tried bash hello.sh, but all I hot is &quot;Hello!!!&quot;, as output, not
<br>
&quot;Hello, I'm your .bashrc file, you're running non-interactive bash&quot;.
<br>
<p>Why is that?
<br>
<p><p>These are the commands I've tried after setting .bashrc to be to the
<br>
word same as .bash_profile (I didn't have .bashrc file before these
<br>
changes), and their outputs:
<br>
<p>&nbsp;slax_at_marija:/OpenFOAM/OpenFOAM-1.5-dev/tutorials/interFoam/mojDambreak$
<br>
/OpenFOAM/ThirdParty/openmpi-1.3/platforms/linuxGccDPOpt/bin/mpirun -H
<br>
mario -np 2 `which interFoam` -parallel
<br>
/OpenFOAM/OpenFOAM-1.5-dev/applications/bin/linuxGccDPOpt/interFoam:
<br>
error while loading shared libraries: libinterfaceProperties.so: cannot
<br>
open shared object file: No such file or directory
<br>
/OpenFOAM/OpenFOAM-1.5-dev/applications/bin/linuxGccDPOpt/interFoam:
<br>
error while loading shared libraries: libinterfaceProperties.so: cannot
<br>
open shared object file: No such file or directory
<br>
slax_at_marija:/OpenFOAM/OpenFOAM-1.5-dev/tutorials/interFoam/mojDambreak$
<br>
<p>I've started mpirun with a full pathname, so that it works like the
<br>
--prefix command and translates the installation info to the node. Not
<br>
being able to find the dynamically linked shared libraries point to env.
<br>
variable that's missing or incorrectly set.
<br>
<p>`which interFoam` part is from instructions on how to run OpenFOAM
<br>
programs using mpirun found here:
<br>
<p><p><a href="http://www.opencfd.co.uk/openfoam/doc/userse35.html">http://www.opencfd.co.uk/openfoam/doc/userse35.html</a>
<br>
<p>then I've tried another approach, sending env variables with the -x
<br>
option of mpirun:
<br>
<p>slax_at_marija:/OpenFOAM/OpenFOAM-1.5-dev/tutorials/interFoam/mojDambreak$
<br>
/OpenFOAM/ThirdParty/openmpi-1.3/platforms/linuxGccDPOpt/bin/mpirun -x
<br>
LD_LIBRARY_PATH=$LD_LIBRARY_PATH, -x PATH=$PATH, -H mario -np 2 `which
<br>
interFoam` -parallel
<br>
--------------------------------------------------------------------------
<br>
mpirun noticed that process rank 0 with PID 12121 on node mario exited
<br>
on signal 11 (Segmentation fault).
<br>
--------------------------------------------------------------------------
<br>
slax_at_marija:/OpenFOAM/OpenFOAM-1.5-dev/tutorials/interFoam/mojDambreak$
<br>
<p>and this result gives me a new hint, but where does this hint lead to?
<br>
<p>Questions:
<br>
<p>Why didn't the copying of .bash_profile contents to .bashrc work at all?
<br>
<p>Why did the second type of invocation return a Segmentation Fault?
<br>
<p>I can try sending more env. variables via -x option, but they are really
<br>
numerous for OpenFOAM.
<br>
<p>Any advice? As you all see, I'm really trying, and this is quite heavy
<br>
stuff for a newbish mech. engineer. :)))
<br>
<p>Thank you Prasadcse Perera for your advice and time!
<br>
<p>Best regards,
<br>
Tomislav
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10173.php">Dominik Táborský: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>Previous message:</strong> <a href="10171.php">Tomislav Maric: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
<li><strong>In reply to:</strong> <a href="10169.php">Prasadcse Perera: "Re: [OMPI users] Open MPI and env. variables (LD_LIBRARY_PATH and PATH) - complete and utter Open MPI / Linux noob"</a>
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
