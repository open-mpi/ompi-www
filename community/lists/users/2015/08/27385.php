<?
$subject_val = "Re: [OMPI users] pbs vs openmpi node allocation";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Aug  3 13:30:43 2015" -->
<!-- isoreceived="20150803173043" -->
<!-- sent="Mon, 03 Aug 2015 13:30:36 -0400" -->
<!-- isosent="20150803173036" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] pbs vs openmpi node allocation" -->
<!-- id="55BFA53C.6080104_at_ldeo.columbia.edu" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CA+DemH_mghWFHnChKC4q2dDwkLNBMXP8K3RGgxOUDUC=xzH8iA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] pbs vs openmpi node allocation<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-08-03 13:30:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>In reply to:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Abhisek
<br>
<p>On 08/03/2015 12:59 PM, abhisek Mondal wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;    I'm using openmpi-1.6.4 to distribute a jobs in 2 different nodes
</span><br>
<span class="quotelev1">&gt; using this command:
</span><br>
<span class="quotelev1">&gt; /&quot;mpirun --hostfile myhostfile -np 10 nwchem my_code.nw&quot;/
</span><br>
<span class="quotelev1">&gt; Here, &quot;myhostfile&quot; contains:
</span><br>
<span class="quotelev1">&gt; /cx0937 slots=5 /
</span><br>
<span class="quotelev1">&gt; /cx0934 slots=5/
</span><br>
<p>I am assuming by pbs you mean Torque.
<br>
If your Open MPI was built with Torque support (--with-tm),
<br>
then you don't even need the --hostfile option
<br>
(and probably shouldn't use it).
<br>
Unless newchem behaves in a very non-standard way,
<br>
which I don't really know.
<br>
<p>Open MPI will use the nodes provided by Torque.
<br>
<p>To check this do;
<br>
<p>ompi_info |grep tm
<br>
<p>In the Open MPI parlance Torque is &quot;tm&quot;.
<br>
<p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; But as I have to submit the jobs using .pbs script, I'm wondering in
</span><br>
<span class="quotelev1">&gt; this case, how &quot;mpirun&quot; going to choose the node (free node allocation
</span><br>
<span class="quotelev1">&gt; is done by pbs) from &quot;myhostfile&quot;.
</span><br>
<span class="quotelev1">&gt; I mean, does it happen that until the specific-nodes (as mentioned in
</span><br>
<span class="quotelev1">&gt; myhostfile) become free &quot;mpirun&quot; is going to wait and then start ?
</span><br>
<span class="quotelev1">&gt; How can I forward the allocated node name(by pbs) to /mpirun/ command ?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; A little light on this matter would be really great.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Your script only starts after Torque allocates the nodes and starts the 
<br>
script on the first node.
<br>
Mpirun doesn't choose the nodes, it uses it.
<br>
If you are using Torque it may be worth looking into some of its 
<br>
environment variables.
<br>
<p>&quot;man qsub&quot; will tell you a lot about them, and probably will clarify
<br>
many things more.
<br>
<p>Some very useful ones are:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBS_O_WORKDIR
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the absolute path of the current working directory of the 
<br>
qsub command.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBS_JOBID
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the job identifier assigned to the job by the batch system.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBS_JOBNAME
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the job name supplied by the user.
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PBS_NODEFILE
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;the name of the file contain the list of nodes assigned 
<br>
to the job (for parallel and cluster systems).
<br>
<p><p>***
<br>
<p>In your script you can
<br>
<p>cd $PBS_O_WORKDIR
<br>
<p>as by default Torque puts you in your home directory in the compute 
<br>
node, which may not be where you want to be.
<br>
<p>Another way to document the nodes that you're using is to put this
<br>
line in your script:
<br>
<p>cat $PBS_NODEFILE
<br>
<p>which will list the nodes (repeated by as many cores/CPUs as you have 
<br>
requested from each node).  Actually, if you ever want to use the
<br>
mpirun --hostfile option, the actual node file would be $PBS_NODEFILE.
<br>
[You don't need to do it if Open MPI was built with Torque support.]
<br>
<p><p><p>I hope this helps.
<br>
Gus Correa
<br>
<p><p><span class="quotelev1">&gt; Thank you.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Abhisek Mondal
</span><br>
<span class="quotelev1">&gt; /Research Fellow
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /Structural Biology and Bioinformatics
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /Indian Institute of Chemical Biology/
</span><br>
<span class="quotelev1">&gt; /Kolkata 700032
</span><br>
<span class="quotelev1">&gt; /
</span><br>
<span class="quotelev1">&gt; /INDIA
</span><br>
<span class="quotelev1">&gt; /
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
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2015/08/27383.php">http://www.open-mpi.org/community/lists/users/2015/08/27383.php</a>
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="27386.php">Nate Chambers: "[OMPI users] segfault on java binding from MPI.init()"</a>
<li><strong>Previous message:</strong> <a href="27384.php">Andrus, Brian Contractor: "Re: [OMPI users] pbs vs openmpi node allocation"</a>
<li><strong>In reply to:</strong> <a href="27383.php">abhisek Mondal: "[OMPI users] pbs vs openmpi node allocation"</a>
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
