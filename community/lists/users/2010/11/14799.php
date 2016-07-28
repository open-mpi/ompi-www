<?
$subject_val = "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Nov 17 04:33:39 2010" -->
<!-- isoreceived="20101117093339" -->
<!-- sent="Wed, 17 Nov 2010 10:30:26 +0100" -->
<!-- isosent="20101117093026" -->
<!-- name="Daniel Gruber" -->
<!-- email="daniel.x.gruber_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts" -->
<!-- id="1289986226.3718.98.camel_at_dhcp-ergb01-140-195" -->
<!-- charset="UTF-8" -->
<!-- inreplyto="AANLkTikAw=Bn=femk1Nn_3ihaO4B83PSqSykkpoBfgPV_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts<br>
<strong>From:</strong> Daniel Gruber (<em>daniel.x.gruber_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-11-17 04:30:26
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14800.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14798.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14796.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi, 
<br>
<p>I'm interested in what is expected from OGE/SGE in order to support 
<br>
most of your scenarios. First of all the &quot;-binding pe&quot; request is 
<br>
not flexible and makes only sense in scenarios when having the 
<br>
same architecture on each host, each involved host is 
<br>
used exclusively for the job (SGE exclusive job feature) 
<br>
and when the same amount of slots is allocated for each 
<br>
host (fixed allocation rule). SGE just writes out the 
<br>
socket,core tuples (determined on master task host) in 
<br>
the pe_hostfile (the same for each host!). SGE does no 
<br>
binding itself. Therefore I think we should have a deeper 
<br>
look on the more flexible &quot;-binding [set] &lt;strategy&gt;&quot;. 
<br>
<p>1. One qrsh (--inherit) per slot
<br>
&nbsp;
<br>
If a (legacy) parallel application does a qrsh for *each* granted 
<br>
slot (regardless if it calls the local host or a remote host) 
<br>
this should work out of the box with OGE/SGE with the 
<br>
&quot;-binding linear:1&quot; request in OGE tight integration. 
<br>
What might confuse here is when doing a &quot;qstat -cb -j &lt;jobno&gt;&quot; 
<br>
just one core is shown as allocated (which is a bug). 
<br>
But when having a look on the host level (qstat -F m_topology_inuse) 
<br>
the allocated cores can be seen. This should work with 
<br>
different allocation rules.
<br>
<p>2. One qrsh per host (OpenMPI case)
<br>
<p>This should work under following constraints:
<br>
- OGE tight integration (control_slaves true)
<br>
- fixed allocation schema (allocation_rule N)
<br>
Then what is needed is simply call qsub with 
<br>
&quot;-binding linear:N&quot;. Then the master script on 
<br>
the master host and all orted on the remote 
<br>
hosts are bound (if there are free cores) to 
<br>
N successive cores. Here orted is detecting 
<br>
this and binds its threads each to one of the 
<br>
detected cores (when the mpi command line parameter 
<br>
is present) - right? 
<br>
<p>What does not work is having an OGE/SGE allocation_rule
<br>
round robin, or fill up. Since the amount of slots 
<br>
per host are unknown on submission time and different 
<br>
for each host. Am I right that this is currently the 
<br>
only drawback when using SGE and OpenMPI?
<br>
<p>The next thing in the discussion was the alignment of 
<br>
cores and slots. Because the term of &quot;slots&quot; is 
<br>
very flexible in SGE/OGE and does not in all cases 
<br>
reflect the amount of cores (in case of SMT for example)
<br>
a compiled in mapping does not exist at the moment.
<br>
What people could do is to enforce suche a mapping 
<br>
via JSV scripts, which do the necessary reformulation 
<br>
of the request (modify #slots or #cores if necessary).
<br>
<p>Did I miss some important points from SGE/OGE point of 
<br>
view? 
<br>
<p><p>Cheers
<br>
<p>Daniel
<br>
<p><p>Am Dienstag, den 16.11.2010, 18:24 -0700 schrieb Ralph Castain:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Tue, Nov 16, 2010 at 12:23 PM, Terry Dontje
</span><br>
<span class="quotelev1">&gt; &lt;terry.dontje_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt;         On 11/16/2010 01:31 PM, Reuti wrote: 
</span><br>
<span class="quotelev2">&gt;         &gt; Hi Ralph,
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; Am 16.11.2010 um 15:40 schrieb Ralph Castain:
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; 2. have SGE bind procs it launches to -all- of those cores. I believe SGE does this automatically to constrain the procs to running on only those cores.
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; This is another &quot;bug/feature&quot; in SGE: it's a matter of discussion, whether the shepherd should get exactly one core (in case you use more than one `qrsh`per node) for each call, or *all* cores assigned (which we need right now, as the processes in Open MPI will be forks of orte daemon). About such a situtation I filled an issue a long time ago and &quot;limit_to_one_qrsh_per_host yes/no&quot; in the PE definition would do (this setting should then also change the core allocation of the master process):
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; 
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; <a href="http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254">http://gridengine.sunsource.net/issues/show_bug.cgi?id=1254</a>
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; 
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; I believe this is indeed the crux of the issue
</span><br>
<span class="quotelev2">&gt;         &gt; fantastic to share the same view.
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev1">&gt;         FWIW, I think I agree too.
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; 3. tell OMPI to --bind-to-core.
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; 
</span><br>
<span class="quotelev4">&gt;         &gt; &gt; &gt; In other words, tell SGE to allocate a certain number of cores on each node, but to bind each proc to all of them (i.e., don't bind a proc to a specific core). I'm pretty sure that is a standard SGE option today (at least, I know it used to be). I don't believe any patch or devel work is required (to either SGE or OMPI).
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; When you use a fixed allocation_rule and a matching -binding request it will work today. But any other case won't be distributed in the correct way.
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; 
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; Is it possible to not include the -binding request? If SGE is told to use a fixed allocation_rule, and to allocate (for example) 2 cores/node, then won't the orted see 
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; itself bound to two specific cores on each node?
</span><br>
<span class="quotelev2">&gt;         &gt; When you leave out the -binding, all jobs are allowed to run on any core.
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; We would then be okay as the spawned children of orted would inherit its binding. Just don't tell mpirun to bind the processes and the threads of those MPI procs will be able to operate across the provided cores.
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; 
</span><br>
<span class="quotelev3">&gt;         &gt; &gt; Or does SGE only allocate 2 cores/node in that case (i.e., allocate, but no -binding given), but doesn't bind the orted to any two specific cores? If so, then that would be a problem as the orted would think itself unconstrained. If I understand the thread correctly, you're saying that this is what happens today - true?
</span><br>
<span class="quotelev2">&gt;         &gt; Exactly. It won't apply any binding at all and orted would think of being unlimited. I.e. limited only by the number of slots it should use thereon.
</span><br>
<span class="quotelev2">&gt;         &gt; 
</span><br>
<span class="quotelev1">&gt;         So I guess the question I have for Ralph.  I thought, and this
</span><br>
<span class="quotelev1">&gt;         might be mixing some of the ideas Jeff and I've been talking
</span><br>
<span class="quotelev1">&gt;         about, that when a RM executes the orted with a bound set of
</span><br>
<span class="quotelev1">&gt;         resources (ie cores) that orted would bind the individual
</span><br>
<span class="quotelev1">&gt;         processes on a subset of the bounded resources.  Is this not
</span><br>
<span class="quotelev1">&gt;         really the case for 1.4.X branch?  I believe it is the case
</span><br>
<span class="quotelev1">&gt;         for the trunk based on Jeff's refactoring.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You are absolutely correct, Terry, and the 1.4 release series does
</span><br>
<span class="quotelev1">&gt; include the proper code. The point here, though, is that SGE binds the
</span><br>
<span class="quotelev1">&gt; orted to a single core, even though other cores are also allocated. So
</span><br>
<span class="quotelev1">&gt; the orted detects an external binding of one core, and binds all its
</span><br>
<span class="quotelev1">&gt; children to that same core.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; What I had suggested to Reuti was to not include the -binding flag to
</span><br>
<span class="quotelev1">&gt; SGE in the hopes that SGE would then bind the orted to all the
</span><br>
<span class="quotelev1">&gt; allocated cores. However, as I feared, SGE in that case doesn't bind
</span><br>
<span class="quotelev1">&gt; the orted at all - and so we assume the entire node is available for
</span><br>
<span class="quotelev1">&gt; our use.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This is an SGE issue. We need them to bind the orted to -all- the
</span><br>
<span class="quotelev1">&gt; allocated cores (and only those cores) in order for us to operate
</span><br>
<span class="quotelev1">&gt; correctly.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;  
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         -- 
</span><br>
<span class="quotelev1">&gt;         Oracle
</span><br>
<span class="quotelev1">&gt;         Terry D. Dontje | Principal Software Engineer
</span><br>
<span class="quotelev1">&gt;         Developer Tools Engineering | +1.781.442.2631
</span><br>
<span class="quotelev1">&gt;         Oracle - Performance Technologies
</span><br>
<span class="quotelev1">&gt;         95 Network Drive, Burlington, MA 01803
</span><br>
<span class="quotelev1">&gt;         Email terry.dontje_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         
</span><br>
<span class="quotelev1">&gt;         _______________________________________________
</span><br>
<span class="quotelev1">&gt;         users mailing list
</span><br>
<span class="quotelev1">&gt;         users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;         <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><pre>
-- 
- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
- -
Daniel Gruber | Software Engineer
Phone: +49 (0)941 3075-128  (x60128)
ORACLE Grid Engine Engineering
ORACLE Deutschland B.V. &amp; Co. KG | Dr.-Leo-Ritter-Str. 7 | D-93049
Regensburg
ORACLE Deutschland B.V. &amp; Co. KG
Hauptverwaltung: Riesstr. 25, D-80992 M&#195;&#188;nchen
Registergericht: Amtsgericht M&#195;&#188;nchen, HRA 95603
Komplement&#195;&#164;rin: ORACLE Deutschland Verwaltung B.V.
Rijnzathe 6, 3454PV De Meern, Niederlande
Handelsregister der Handelskammer Midden-Niederlande, Nr. 30143697
Gesch&#195;&#164;ftsf&#195;&#188;hrer: J&#195;&#188;rgen Kunz, Marcel van de Molen, Alexander van der Ven
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14800.php">Ricardo Reis: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>Previous message:</strong> <a href="14798.php">Pascal Deveze: "Re: [OMPI users] mpi-io, fortran, going crazy... (ADENDA)"</a>
<li><strong>In reply to:</strong> <a href="14796.php">Ralph Castain: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="14803.php">Terry Dontje: "Re: [OMPI users] Error when using OpenMPI with SGE multiple hosts"</a>
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
