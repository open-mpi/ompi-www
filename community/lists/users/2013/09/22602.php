<?
$subject_val = "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Sep  3 19:19:26 2013" -->
<!-- isoreceived="20130903231926" -->
<!-- sent="Tue, 3 Sep 2013 17:19:25 -0600" -->
<!-- isosent="20130903231925" -->
<!-- name="Nathan Hjelm" -->
<!-- email="hjelmn_at_[hidden]" -->
<!-- subject="Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?" -->
<!-- id="20130903231925.GD49223_at_pn1246003.lanl.gov" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="CE4BB82B.35928%knteran_at_sandia.gov" -->
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
<strong>Subject:</strong> Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?<br>
<strong>From:</strong> Nathan Hjelm (<em>hjelmn_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-09-03 19:19:25
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="22603.php">Alina Sklarevich: "[OMPI users] knem support in ompi"</a>
<li><strong>Previous message:</strong> <a href="22601.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>In reply to:</strong> <a href="22601.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Interesting. That should work then. I haven't tested it under batch mode though. Let
<br>
me try to reproduce on Cielito and see what happens.
<br>
<p>-Nathan
<br>
<p>On Tue, Sep 03, 2013 at 11:04:40PM +0000, Teranishi, Keita wrote:
<br>
<span class="quotelev1">&gt; Nathan,
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is close to Cielo and use resource manager under
</span><br>
<span class="quotelev1">&gt; /opt/cray/xe-sysroot/4.1.40/usr.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Currently Loaded Modulefiles:
</span><br>
<span class="quotelev1">&gt;   1) modules/3.2.6.7                         17)
</span><br>
<span class="quotelev1">&gt; csa/3.0.0-1_2.0401.37452.4.50.gem
</span><br>
<span class="quotelev1">&gt;   2) craype-network-gemini                   18)
</span><br>
<span class="quotelev1">&gt; job/1.5.5-0.1_2.0401.35380.1.10.gem
</span><br>
<span class="quotelev1">&gt;   3) cray-mpich2/5.6.4                       19)
</span><br>
<span class="quotelev1">&gt; xpmem/0.1-2.0401.36790.4.3.gem
</span><br>
<span class="quotelev1">&gt;   4) atp/1.6.3                               20)
</span><br>
<span class="quotelev1">&gt; gni-headers/2.1-1.0401.5675.4.4.gem
</span><br>
<span class="quotelev1">&gt;   5) xe-sysroot/4.1.40                       21)
</span><br>
<span class="quotelev1">&gt; dmapp/3.2.1-1.0401.5983.4.5.gem
</span><br>
<span class="quotelev1">&gt;   6) switch/1.0-1.0401.36779.2.72.gem        22)
</span><br>
<span class="quotelev1">&gt; pmi/2.1.4-1.0000.8596.8.9.gem
</span><br>
<span class="quotelev1">&gt;   7) shared-root/1.0-1.0401.37253.3.50.gem   23)
</span><br>
<span class="quotelev1">&gt; ugni/4.0-1.0401.5928.9.5.gem
</span><br>
<span class="quotelev1">&gt;   8) pdsh/2.26-1.0401.37449.1.1.gem          24)
</span><br>
<span class="quotelev1">&gt; udreg/2.3.2-1.0401.5929.3.3.gem
</span><br>
<span class="quotelev1">&gt;   9) nodehealth/5.0-1.0401.38460.12.18.gem   25) xt-libsci/12.0.00
</span><br>
<span class="quotelev1">&gt;  10) lbcd/2.1-1.0401.35360.1.2.gem           26) xt-totalview/8.12.0
</span><br>
<span class="quotelev1">&gt;  11) hosts/1.0-1.0401.35364.1.115.gem        27) totalview-support/1.1.4
</span><br>
<span class="quotelev1">&gt;  12) configuration/1.0-1.0401.35391.1.2.gem  28) gcc/4.7.2
</span><br>
<span class="quotelev1">&gt;  13) ccm/2.2.0-1.0401.37254.2.142            29) xt-asyncpe/5.22
</span><br>
<span class="quotelev1">&gt;  14) audit/1.0.0-1.0401.37969.2.32.gem       30) eswrap/1.0.8
</span><br>
<span class="quotelev1">&gt;  15) rca/1.0.0-2.0401.38656.2.2.gem          31) craype-mc8
</span><br>
<span class="quotelev1">&gt;  16) dvs/1.8.6_0.9.0-1.0401.1401.1.120       32) PrgEnv-gnu/4.1.40
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; Keita
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On 9/3/13 3:42 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;Hmm, what CLE release is your development cluster running? It is the value
</span><br>
<span class="quotelev2">&gt; &gt;after PrgEnv. Ex. on Cielito we have 4.1.40.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;32) PrgEnv-gnu/4.1.40
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;We have not yet fully tested Open MPI on CLE 5.x.x.
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;-Nathan Hjelm
</span><br>
<span class="quotelev2">&gt; &gt;HPC-3, LANL
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;On Tue, Sep 03, 2013 at 10:33:57PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Hi,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is what I put in my PBS script to allocate only single node (I want
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to use 16 MPI processes in a single node).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #PBS -l mppwidth=16
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #PBS -l mppnppn=16
</span><br>
<span class="quotelev3">&gt; &gt;&gt; #PBS -l mppdepth=1
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Here is the output from aprun (aprun -n 16 -N 16).
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 2 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 5 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 8 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 12 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 4 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 14 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 0 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 1 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 3 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 13 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 9 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 6 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 11 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 10 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 7 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Process 15 of 16 is on nid00017
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; I am guessing that the CrayXE6 here is different from the others in
</span><br>
<span class="quotelev3">&gt; &gt;&gt; production (it is 1 cabinet configuration for code development) and I am
</span><br>
<span class="quotelev3">&gt; &gt;&gt; afraid mpirun/mpiexec does wrong instantiation of aprun command. Do I
</span><br>
<span class="quotelev3">&gt; &gt;&gt;have
</span><br>
<span class="quotelev3">&gt; &gt;&gt; to edit the script in contrib?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; Keita
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; On 9/3/13 2:51 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;Interesting - and do you have an allocation? If so, what was it - i.e.,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;can you check the allocation envar to see if you have 16 slots?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;On Sep 3, 2013, at 1:38 PM, &quot;Teranishi, Keita&quot; &lt;knteran_at_[hidden]&gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt;wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; It is what I got.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; There are not enough slots available in the system to satisfy the 16
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;slots
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; that were requested by the application:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;  /home/knteran/test-openmpi/cpi
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Either request fewer slots for your application, or make more slots
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; available
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; for use.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;-----------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; &gt;&gt;&gt;&gt;--
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;-
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; Keita
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; On 9/3/13 1:26 PM, &quot;Ralph Castain&quot; &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; How does it fail?
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; On Sep 3, 2013, at 1:19 PM, &quot;Teranishi, Keita&quot; &lt;knteran_at_[hidden]&gt;
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Nathan,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Thanks for the help.  I can run a job using openmpi, assigning a
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt;signle
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; process per node.  However, I have been failing to run a job using
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; multiple MPI ranks in a single node.  In other words, &quot;mpiexec
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; --bind-to-core --npernode 16 --n 16 ./test&quot; never works (apron -n
</span><br>
<span class="quotelev3">&gt; &gt;&gt;16
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; works
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; fine).  DO you have any thought about it?
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; ---------------------------------------------
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Keita Teranishi
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; R&amp;D Principal Staff Member
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Scalable Modeling and Analysis Systems
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Sandia National Laboratories
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; Livermore, CA 94551
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; On 8/30/13 8:49 AM, &quot;Hjelm, Nathan T&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Replace install_path to where you want Open MPI installed.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; ./configure --prefix=install_path
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; --with-platform=contrib/platform/lanl/cray_xe6/optimized-luster
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; make
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; make install
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; To use Open MPI just set the PATH and LD_LIBRARY_PATH:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; PATH=install_path/bin:$PATH
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; LD_LIBRARY_PATH=install_path/lib:$LD_LIBRARY_PATH
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; You can then use mpicc, mpicxx, mpif90, etc to compile and either
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; mpirun
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; or aprun to run. If you are running at scale I would recommend
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;against
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; using aprun for now. I also recommend you change your programming
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; environment to either PrgEnv-gnu or PrgEnv-intel. The PGI compiler
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;can
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; be
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; a PIA. It is possible to build with the Cray compiler but it takes
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; patching the config.guess and changing some autoconf stuff.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; -Nathan
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Please excuse the horrible Outlook-style quoting.
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; ________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; From: users [users-bounces_at_[hidden]] on behalf of Teranishi,
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;Keita
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; [knteran_at_[hidden]]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Sent: Thursday, August 29, 2013 8:01 PM
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; To: Open MPI Users
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Subject: Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;XE6)
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; is working for OpenMPI-1.6.5?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; Thanks for the info.  Is it still possible to build by myself?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;What
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;is
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; the procedure other than configure script?
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; On 8/23/13 2:37 PM, &quot;Nathan Hjelm&quot; &lt;hjelmn_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; On Fri, Aug 23, 2013 at 09:14:25PM +0000, Teranishi, Keita wrote:
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;  Hi,
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;  I am trying to install OpenMPI 1.6.5 on Cray XE6 and very
</span><br>
<span class="quotelev3">&gt; &gt;&gt;curious
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; with the
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;  current support of PMI.  In the previous discussions, there
</span><br>
<span class="quotelev3">&gt; &gt;&gt;was a
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; comment
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;  on the version of PMI (it works with 2.1.4, but fails with
</span><br>
<span class="quotelev3">&gt; &gt;&gt;3.0).
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt; Our
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Open MPI 1.6.5 does not have support for the XE-6. Use 1.7.2
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;instead.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;&gt;  machine has PMI2.1.4 and PMI4.0 (default).  Which version do
</span><br>
<span class="quotelev3">&gt; &gt;&gt;you
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; There was a regression in PMI 3.x.x that still exists in 4.0.x
</span><br>
<span class="quotelev3">&gt; &gt;&gt;that
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; causes a warning to be printed on every rank when using mpirun.
</span><br>
<span class="quotelev3">&gt; &gt;&gt;We
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt;are
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; working with Cray to resolve the issue. For now use 2.1.4. See
</span><br>
<span class="quotelev3">&gt; &gt;&gt;the
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; platform files in contrib/platform/lanl/cray_xe6. The platform
</span><br>
<span class="quotelev3">&gt; &gt;&gt;files
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; you
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; would want to use are debug-lustre or optimized-lusre.
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; BTW, 1.7.2 is installed on Cielo and Cielito. Just run:
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; module swap PrgEnv-pgi PrgEnv-gnu (PrgEnv-intel also works)
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; module unload cray-mpich2 xt-libsci
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; module load openmpi/1.7.2
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; -Nathan Hjelm
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; Open MPI Team, HPC-3, LANL
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; &gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; 
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;&gt; &gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; 
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; &gt;&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;users mailing list
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev4">&gt; &gt;&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev3">&gt; &gt;&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt; &gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt; &gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt; &gt;_______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt;users mailing list
</span><br>
<span class="quotelev2">&gt; &gt;users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt;<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="22603.php">Alina Sklarevich: "[OMPI users] knem support in ompi"</a>
<li><strong>Previous message:</strong> <a href="22601.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
<li><strong>In reply to:</strong> <a href="22601.php">Teranishi, Keita: "Re: [OMPI users] [EXTERNAL] Re: What version of PMI (Cray XE6) is working for OpenMPI-1.6.5?"</a>
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
