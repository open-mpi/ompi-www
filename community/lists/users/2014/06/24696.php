<?
$subject_val = "Re: [OMPI users] affinity issues under cpuset torque 1.8.1";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Jun 24 10:22:11 2014" -->
<!-- isoreceived="20140624142211" -->
<!-- sent="Tue, 24 Jun 2014 14:22:08 +0000" -->
<!-- isosent="20140624142208" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] affinity issues under cpuset torque 1.8.1" -->
<!-- id="93A8748D-6807-48D5-93B3-A0EF03313C19_at_cisco.com" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CAMD57ofNP88n6esxm4bDKdCJc52H_eoK1bjtPnG1+QTu6=Tg-Q_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] affinity issues under cpuset torque 1.8.1<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2014-06-24 10:22:08
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24697.php">Fischer, Greg A.: "[OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24695.php">Dr.Peer-Joachim Koch: "[OMPI users] mpi prorg fails (big data)"</a>
<li><strong>In reply to:</strong> <a href="24694.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Brock --
<br>
<p>Can you run with &quot;ompi_info --all&quot;?
<br>
<p>With &quot;--param all all&quot;, ompi_info in v1.8.x is defaulting to only showing level 1 MCA params.  It's showing you all possible components and variables, but only level 1.
<br>
<p>Or you could also use &quot;--level 9&quot; to show all 9 levels.  Here's the relevant section from the README:
<br>
<p>-----
<br>
The following options may be helpful:
<br>
<p>--all       Show a *lot* of information about your Open MPI
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;installation. 
<br>
--parsable  Display all the information in an easily
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;grep/cut/awk/sed-able format.
<br>
--param &lt;framework&gt; &lt;component&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;A &lt;framework&gt; of &quot;all&quot; and a &lt;component&gt; of &quot;all&quot; will
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;show all parameters to all components.  Otherwise, the
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;parameters of all the components in a specific framework,
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or just the parameters of a specific component can be
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;displayed by using an appropriate &lt;framework&gt; and/or
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;component&gt; name.
<br>
--level &lt;level&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;By default, ompi_info only shows &quot;Level 1&quot; MCA parameters
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-- parameters that can affect whether MPI processes can
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;run successfully or not (e.g., determining which network
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;interfaces to use).  The --level option will display all
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MCA parameters from level 1 to &lt;level&gt; (the max &lt;level&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;value is 9).  Use &quot;ompi_info --param &lt;framework&gt;
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;component&gt; --level 9&quot; to see *all* MCA parameters for a
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;given component.  See &quot;The Modular Component Architecture
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(MCA)&quot; section, below, for a fuller explanation.
<br>
<pre>
----
On Jun 24, 2014, at 5:19 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; That's odd - it shouldn't truncate the output. I'll take a look later today - we're all gathered for a developer's conference this week, so I'll be able to poke at this with Nathan.
&gt; 
&gt; 
&gt; 
&gt; On Mon, Jun 23, 2014 at 3:15 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; Perfection, flexible, extensible, so nice.
&gt; 
&gt; BTW this doesn't happen older versions,
&gt; 
&gt; [brockp_at_flux-login2 34241]$ ompi_info --param all all
&gt; Error getting SCIF driver version
&gt;                  MCA btl: parameter &quot;btl_tcp_if_include&quot; (current value: &quot;&quot;,
&gt;                           data source: default, level: 1 user/basic, type:
&gt;                           string)
&gt;                           Comma-delimited list of devices and/or CIDR
&gt;                           notation of networks to use for MPI communication
&gt;                           (e.g., &quot;eth0,192.168.0.0/16&quot;).  Mutually exclusive
&gt;                           with btl_tcp_if_exclude.
&gt;                  MCA btl: parameter &quot;btl_tcp_if_exclude&quot; (current value:
&gt;                           &quot;127.0.0.1/8,sppp&quot;, data source: default, level: 1
&gt;                           user/basic, type: string)
&gt;                           Comma-delimited list of devices and/or CIDR
&gt;                           notation of networks to NOT use for MPI
&gt;                           communication -- all devices not matching these
&gt;                           specifications will be used (e.g.,
&gt;                           &quot;eth0,192.168.0.0/16&quot;).  If set to a non-default
&gt;                           value, it is mutually exclusive with
&gt;                           btl_tcp_if_include.
&gt; 
&gt; 
&gt; This is normally much longer.  And yes we don't have the PHI stuff installed on all nodes, strange that 'all all' is now very short,  ompi_info -a  still works though.
&gt; 
&gt; 
&gt; 
&gt; Brock Palen
&gt; www.umich.edu/~brockp
&gt; CAEN Advanced Computing
&gt; XSEDE Campus Champion
&gt; brockp_at_[hidden]
&gt; (734)936-1985
&gt; 
&gt; 
&gt; 
&gt; On Jun 20, 2014, at 1:48 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; 
&gt; &gt; Put &quot;orte_hetero_nodes=1&quot; in your default MCA param file - uses can override by setting that param to 0
&gt; &gt;
&gt; &gt;
&gt; &gt; On Jun 20, 2014, at 10:30 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; &gt;
&gt; &gt;&gt; Perfection!  That appears to do it for our standard case.
&gt; &gt;&gt;
&gt; &gt;&gt; Now I know how to set MCA options by env var or config file.  How can I make this the default, that then a user can override?
&gt; &gt;&gt;
&gt; &gt;&gt; Brock Palen
&gt; &gt;&gt; www.umich.edu/~brockp
&gt; &gt;&gt; CAEN Advanced Computing
&gt; &gt;&gt; XSEDE Campus Champion
&gt; &gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt; (734)936-1985
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt;
&gt; &gt;&gt; On Jun 20, 2014, at 1:21 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; &gt;&gt;
&gt; &gt;&gt;&gt; I think I begin to grok at least part of the problem. If you are assigning different cpus on each node, then you'll need to tell us that by setting --hetero-nodes otherwise we won't have any way to report that back to mpirun for its binding calculation.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; Otherwise, we expect that the cpuset of the first node we launch a daemon onto (or where mpirun is executing, if we are only launching local to mpirun) accurately represents the cpuset on every node in the allocation.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; We still might well have a bug in our binding computation - but the above will definitely impact what you said the user did.
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; On Jun 20, 2014, at 10:06 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Extra data point if I do:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; [brockp_at_nyx5508 34241]$ mpirun --report-bindings --bind-to core hostname
&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt; A request was made to bind to that would result in binding more
&gt; &gt;&gt;&gt;&gt; processes than cpus on a resource:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Bind to:         CORE
&gt; &gt;&gt;&gt;&gt; Node:            nyx5513
&gt; &gt;&gt;&gt;&gt; #processes:  2
&gt; &gt;&gt;&gt;&gt; #cpus:          1
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; You can override this protection by adding the &quot;overload-allowed&quot;
&gt; &gt;&gt;&gt;&gt; option to your binding directive.
&gt; &gt;&gt;&gt;&gt; --------------------------------------------------------------------------
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; [brockp_at_nyx5508 34241]$ mpirun -H nyx5513 uptime
&gt; &gt;&gt;&gt;&gt; 13:01:37 up 31 days, 23:06,  0 users,  load average: 10.13, 10.90, 12.38
&gt; &gt;&gt;&gt;&gt; 13:01:37 up 31 days, 23:06,  0 users,  load average: 10.13, 10.90, 12.38
&gt; &gt;&gt;&gt;&gt; [brockp_at_nyx5508 34241]$ mpirun -H nyx5513 --bind-to core hwloc-bind --get
&gt; &gt;&gt;&gt;&gt; 0x00000010
&gt; &gt;&gt;&gt;&gt; 0x00001000
&gt; &gt;&gt;&gt;&gt; [brockp_at_nyx5508 34241]$ cat $PBS_NODEFILE | grep nyx5513
&gt; &gt;&gt;&gt;&gt; nyx5513
&gt; &gt;&gt;&gt;&gt; nyx5513
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Interesting, if I force bind to core, MPI barfs saying there is only 1 cpu available, PBS says it gave it two, and if I force (this is all inside an interactive job) just on that node hwloc-bind --get I get what I expect,
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Is there a way to get a map of what MPI thinks it has on each host?
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; Brock Palen
&gt; &gt;&gt;&gt;&gt; www.umich.edu/~brockp
&gt; &gt;&gt;&gt;&gt; CAEN Advanced Computing
&gt; &gt;&gt;&gt;&gt; XSEDE Campus Champion
&gt; &gt;&gt;&gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt;&gt;&gt; (734)936-1985
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; On Jun 20, 2014, at 12:38 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; I was able to produce it in my test.
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; orted affinity set by cpuset:
&gt; &gt;&gt;&gt;&gt;&gt; [root_at_nyx5874 ~]# hwloc-bind --get --pid 103645
&gt; &gt;&gt;&gt;&gt;&gt; 0x0000c002
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; This mask (1, 14,15) which is across sockets, matches the cpu set setup by the batch system.
&gt; &gt;&gt;&gt;&gt;&gt; [root_at_nyx5874 ~]# cat /dev/cpuset/torque/12719806.nyx.engin.umich.edu/cpus
&gt; &gt;&gt;&gt;&gt;&gt; 1,14-15
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; The ranks though were then all set to the same core:
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; [root_at_nyx5874 ~]# hwloc-bind --get --pid 103871
&gt; &gt;&gt;&gt;&gt;&gt; 0x00008000
&gt; &gt;&gt;&gt;&gt;&gt; [root_at_nyx5874 ~]# hwloc-bind --get --pid 103872
&gt; &gt;&gt;&gt;&gt;&gt; 0x00008000
&gt; &gt;&gt;&gt;&gt;&gt; [root_at_nyx5874 ~]# hwloc-bind --get --pid 103873
&gt; &gt;&gt;&gt;&gt;&gt; 0x00008000
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; Which is core 15:
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; report-bindings gave me:
&gt; &gt;&gt;&gt;&gt;&gt; You can see how a few nodes were bound to all the same core, the last one in each case.  I only gave you the results for the hose nyx5874.
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5526.engin.umich.edu:23726] MCW rank 0 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5878.engin.umich.edu:103925] MCW rank 8 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5533.engin.umich.edu:123988] MCW rank 1 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5879.engin.umich.edu:102808] MCW rank 9 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5874.engin.umich.edu:103645] MCW rank 41 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5874.engin.umich.edu:103645] MCW rank 42 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5874.engin.umich.edu:103645] MCW rank 43 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5888.engin.umich.edu:117400] MCW rank 11 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5786.engin.umich.edu:30004] MCW rank 19 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5786.engin.umich.edu:30004] MCW rank 18 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5594.engin.umich.edu:33884] MCW rank 24 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5594.engin.umich.edu:33884] MCW rank 25 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5594.engin.umich.edu:33884] MCW rank 26 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5798.engin.umich.edu:53026] MCW rank 59 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5798.engin.umich.edu:53026] MCW rank 60 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5798.engin.umich.edu:53026] MCW rank 56 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5798.engin.umich.edu:53026] MCW rank 57 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5798.engin.umich.edu:53026] MCW rank 58 bound to socket 1[core 15[hwt 0]]: [./././././././.][./././././././B]
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5545.engin.umich.edu:88170] MCW rank 2 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5613.engin.umich.edu:25229] MCW rank 31 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5880.engin.umich.edu:01406] MCW rank 10 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5770.engin.umich.edu:86538] MCW rank 6 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5613.engin.umich.edu:25228] MCW rank 30 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5577.engin.umich.edu:65949] MCW rank 4 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5607.engin.umich.edu:30379] MCW rank 14 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5544.engin.umich.edu:72960] MCW rank 47 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5544.engin.umich.edu:72959] MCW rank 46 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5848.engin.umich.edu:04332] MCW rank 33 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5848.engin.umich.edu:04333] MCW rank 34 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5544.engin.umich.edu:72958] MCW rank 45 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5858.engin.umich.edu:12165] MCW rank 35 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5607.engin.umich.edu:30380] MCW rank 15 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5544.engin.umich.edu:72957] MCW rank 44 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5858.engin.umich.edu:12167] MCW rank 37 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5870.engin.umich.edu:33811] MCW rank 7 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5582.engin.umich.edu:81994] MCW rank 5 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5848.engin.umich.edu:04331] MCW rank 32 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5557.engin.umich.edu:46654] MCW rank 50 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5858.engin.umich.edu:12166] MCW rank 36 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5799.engin.umich.edu:67802] MCW rank 22 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5799.engin.umich.edu:67803] MCW rank 23 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5556.engin.umich.edu:50889] MCW rank 3 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5625.engin.umich.edu:95931] MCW rank 53 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5625.engin.umich.edu:95930] MCW rank 52 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5557.engin.umich.edu:46655] MCW rank 51 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5625.engin.umich.edu:95932] MCW rank 54 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5625.engin.umich.edu:95933] MCW rank 55 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5866.engin.umich.edu:16306] MCW rank 40 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5861.engin.umich.edu:22761] MCW rank 61 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5861.engin.umich.edu:22762] MCW rank 62 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5861.engin.umich.edu:22763] MCW rank 63 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5557.engin.umich.edu:46652] MCW rank 48 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5557.engin.umich.edu:46653] MCW rank 49 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5866.engin.umich.edu:16304] MCW rank 38 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5788.engin.umich.edu:02465] MCW rank 20 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5597.engin.umich.edu:68071] MCW rank 27 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5775.engin.umich.edu:27952] MCW rank 17 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5866.engin.umich.edu:16305] MCW rank 39 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5788.engin.umich.edu:02466] MCW rank 21 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5775.engin.umich.edu:27951] MCW rank 16 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5597.engin.umich.edu:68073] MCW rank 29 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5597.engin.umich.edu:68072] MCW rank 28 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5552.engin.umich.edu:30481] MCW rank 12 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt; [nyx5552.engin.umich.edu:30482] MCW rank 13 is not bound (or bound to all available processors)
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; Brock Palen
&gt; &gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
&gt; &gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
&gt; &gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
&gt; &gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt; (734)936-1985
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt; On Jun 20, 2014, at 12:20 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Got it,
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; I have the input from the user and am testing it out.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; It probably has less todo with torque and more cpuset's,
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; I'm working on producing it myself also.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; Brock Palen
&gt; &gt;&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
&gt; &gt;&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
&gt; &gt;&gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
&gt; &gt;&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt; (734)936-1985
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Jun 20, 2014, at 12:18 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Thanks - I'm just trying to reproduce one problem case so I can look at it. Given that I don't have access to a Torque machine, I need to &quot;fake&quot; it.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 20, 2014, at 9:15 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; In this case they are a single socket, but as you can see they could be ether/or depending on the job.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brock Palen
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (734)936-1985
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 19, 2014, at 2:44 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Sorry, I should have been clearer - I was asking if cores 8-11 are all on one socket, or span multiple sockets
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 19, 2014, at 11:36 AM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Ralph,
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It was a large job spread across.  Our system allows users to ask for 'procs' which are laid out in any format.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The list:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5409:11][nyx5411:11][nyx5412:3]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Shows that nyx5406 had 2 cores,  nyx5427 also 2,  nyx5411 had 11.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; They could be spread across any number of sockets configuration.  We start very lax &quot;user requests X procs&quot; and then the user can request more strict requirements from there.  We support mostly serial users, and users can colocate on nodes.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; That is good to know, I think we would want to turn our default to 'bind to core' except for our few users who use hybrid mode.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Our CPU set tells you what cores the job is assigned.  So in the problem case provided, the cpuset/cgroup shows only cores 8-11 are available to this job on this node.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brock Palen
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (734)936-1985
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 18, 2014, at 11:10 PM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; The default binding option depends on the number of procs - it is bind-to core for np=2, and bind-to socket for np &gt; 2. You never said, but should I assume you ran 4 ranks? If so, then we should be trying to bind-to socket.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I'm not sure what your cpuset is telling us - are you binding us to a socket? Are some cpus in one socket, and some in another?
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; It could be that the cpuset + bind-to socket is resulting in some odd behavior, but I'd need a little more info to narrow it down.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; On Jun 18, 2014, at 7:48 PM, Brock Palen &lt;brockp_at_[hidden]&gt; wrote:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I have started using 1.8.1 for some codes (meep in this case) and it sometimes works fine, but in a few cases I am seeing ranks being given overlapping CPU assignments, not always though.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Example job, default binding options (so by-core right?):
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Assigned nodes, the one in question is nyx5398, we use torque CPU sets, and use TM to spawn.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5406:2][nyx5427:2][nyx5506:2][nyx5311:3]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5329:4][nyx5398:4][nyx5396:11][nyx5397:11]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [nyx5409:11][nyx5411:11][nyx5412:3]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16065
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000200
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16066
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000800
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16067
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000200
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16068
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000800
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# cat /dev/cpuset/torque/12703230.nyx.engin.umich.edu/cpus
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8-11
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So torque claims the CPU set setup for the job has 4 cores, but as you can see the ranks were giving identical binding.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; I checked the pids they were part of the correct CPU set, I also checked, orted:
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-bind --get --pid 16064
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 0x00000f00
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 16064
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; ignored unrecognized argument 16064
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; [root_at_nyx5398 ~]# hwloc-calc --intersect PU 0x00000f00
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; 8,9,10,11
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Which is exactly what I would expect.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; So ummm, i'm lost why this might happen?  What else should I check?  Like I said not all jobs show this behavior.
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Brock Palen
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; www.umich.edu/~brockp
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; CAEN Advanced Computing
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; XSEDE Campus Champion
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; brockp_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; (734)936-1985
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24672.php">http://www.open-mpi.org/community/lists/users/2014/06/24672.php</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24673.php">http://www.open-mpi.org/community/lists/users/2014/06/24673.php</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24675.php">http://www.open-mpi.org/community/lists/users/2014/06/24675.php</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24676.php">http://www.open-mpi.org/community/lists/users/2014/06/24676.php</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24677.php">http://www.open-mpi.org/community/lists/users/2014/06/24677.php</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24678.php">http://www.open-mpi.org/community/lists/users/2014/06/24678.php</a>
&gt; &gt;&gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt;
&gt; &gt;&gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24681.php">http://www.open-mpi.org/community/lists/users/2014/06/24681.php</a>
&gt; &gt;&gt;&gt;
&gt; &gt;&gt;&gt; _______________________________________________
&gt; &gt;&gt;&gt; users mailing list
&gt; &gt;&gt;&gt; users_at_[hidden]
&gt; &gt;&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24682.php">http://www.open-mpi.org/community/lists/users/2014/06/24682.php</a>
&gt; &gt;&gt;
&gt; &gt;&gt; _______________________________________________
&gt; &gt;&gt; users mailing list
&gt; &gt;&gt; users_at_[hidden]
&gt; &gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24683.php">http://www.open-mpi.org/community/lists/users/2014/06/24683.php</a>
&gt; &gt;
&gt; &gt; _______________________________________________
&gt; &gt; users mailing list
&gt; &gt; users_at_[hidden]
&gt; &gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; &gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24684.php">http://www.open-mpi.org/community/lists/users/2014/06/24684.php</a>
&gt; 
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24690.php">http://www.open-mpi.org/community/lists/users/2014/06/24690.php</a>
&gt; 
&gt; _______________________________________________
&gt; users mailing list
&gt; users_at_[hidden]
&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/users/2014/06/24694.php">http://www.open-mpi.org/community/lists/users/2014/06/24694.php</a>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="24697.php">Fischer, Greg A.: "[OMPI users] poor performance using the openib btl"</a>
<li><strong>Previous message:</strong> <a href="24695.php">Dr.Peer-Joachim Koch: "[OMPI users] mpi prorg fails (big data)"</a>
<li><strong>In reply to:</strong> <a href="24694.php">Ralph Castain: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
<li><strong>Reply:</strong> <a href="24704.php">Brock Palen: "Re: [OMPI users] affinity issues under cpuset torque 1.8.1"</a>
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
