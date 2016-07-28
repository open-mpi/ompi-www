<?
$subject_val = "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes.";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jan 12 14:50:38 2009" -->
<!-- isoreceived="20090112195038" -->
<!-- sent="Mon, 12 Jan 2009 11:50:33 -0800 (PST)" -->
<!-- isosent="20090112195033" -->
<!-- name="kmuriki_at_[hidden]" -->
<!-- email="kmuriki_at_[hidden]" -->
<!-- subject="Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes." -->
<!-- id="Pine.LNX.4.64.0901121131510.20684_at_kmuriki.lbl.gov" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="9839F249-0AAE-4847-86AB-32A8E05B770D_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes.<br>
<strong>From:</strong> <a href="mailto:kmuriki_at_[hidden]?Subject=Re:%20[OMPI%20users]%20slow%20MPI_BCast%20for%20messages%20size%20from%2024K%20bytes%20to%20800K%20bytes."><em>kmuriki_at_[hidden]</em></a><br>
<strong>Date:</strong> 2009-01-12 14:50:33
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7685.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7680.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7686.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<li><strong>Reply:</strong> <a href="7686.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Jeff,
<br>
<p>Thanks for your response.
<br>
Is there is any requirement on the size of the data buffers
<br>
I should use in these warmup broadcasts ? If I use small
<br>
buffers like 1000 real values during warmup, the following
<br>
actual and timed MPI_BCAST over IB is taking a lot of time
<br>
(more than that on GiGE). If I use a bigger buffer of 10000 real
<br>
values during warmup the following timed MPI_BCAST is quick.
<br>
<p>Surprisingly just doing two consecutive 80K byte MPI_BCASTs
<br>
performs very quick (forget about warmup and actual broadcast).
<br>
wheres as a single 80K broadcast is slow. Not sure if I'm missing
<br>
anything!.
<br>
<p>Thanks for you time and suggestions,
<br>
--Krishna.
<br>
<p>On Mon, 12 Jan 2009, Jeff Squyres wrote:
<br>
<p><span class="quotelev1">&gt; You might want to do some &quot;warmup&quot; bcasts before doing your timing 
</span><br>
<span class="quotelev1">&gt; measurements.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Open MPI makes network connections lazily, meaning that we only make 
</span><br>
<span class="quotelev1">&gt; connections upon the first send (e.g., the sends underneath the MPI_BCAST). 
</span><br>
<span class="quotelev1">&gt; So the first MPI_BCAST is likely to be quite slow, while all the IB network 
</span><br>
<span class="quotelev1">&gt; connections are being made.  Subsequent bcasts are likely to be much faster.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Jan 9, 2009, at 8:47 PM, kmuriki_at_[hidden] wrote:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hello there,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; We have a DDR IB cluster with Open MPI ver 1.2.8.
</span><br>
<span class="quotelev2">&gt;&gt; I'm testing on two nodes with two processors each and both
</span><br>
<span class="quotelev2">&gt;&gt; the nodes are adjacent (2 hops distant) on the same leaf
</span><br>
<span class="quotelev2">&gt;&gt; of the tree interconnect.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I observe that when I try to MPI_BCAST among the four MPI
</span><br>
<span class="quotelev2">&gt;&gt; tasks it takes a lot of time with IB network (more than
</span><br>
<span class="quotelev2">&gt;&gt; the GiGE network) when the payload sizes range from 24K bytes
</span><br>
<span class="quotelev2">&gt;&gt; to 800K bytes.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; For payloads below 8K bytes and above 200K bytes the performance
</span><br>
<span class="quotelev2">&gt;&gt; is acceptable.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Any suggestions on how I debug this and locate the source of
</span><br>
<span class="quotelev2">&gt;&gt; the problem ? (More info below) Please let me know if you need
</span><br>
<span class="quotelev2">&gt;&gt; any more information from my side.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; thanks for your time,
</span><br>
<span class="quotelev2">&gt;&gt; Krishna Muriki,
</span><br>
<span class="quotelev2">&gt;&gt; HPC User Services,
</span><br>
<span class="quotelev2">&gt;&gt; Scientific Cluster Support,
</span><br>
<span class="quotelev2">&gt;&gt; Lawrence Berkeley National Laboratory.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I) Payload size 8M bytes over IB:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$ mpirun -v -display-map --mca btl openib,self -np 4 
</span><br>
<span class="quotelev2">&gt;&gt; -hostfile hostfile.lr ./testbcast.8000000
</span><br>
<span class="quotelev2">&gt;&gt; [n0005.scs00:13902]  Map for job: 1     Generated by mapping mode: byslot
</span><br>
<span class="quotelev2">&gt;&gt;       Starting vpid: 0        Vpid range: 4   Num app_contexts: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Data for app_context: index 0   app: ./testbcast.8000000
</span><br>
<span class="quotelev2">&gt;&gt;               Num procs: 4
</span><br>
<span class="quotelev2">&gt;&gt;               Argv[0]: ./testbcast.8000000
</span><br>
<span class="quotelev2">&gt;&gt;               Env[0]: OMPI_MCA_btl=openib,self
</span><br>
<span class="quotelev2">&gt;&gt;               Env[1]: OMPI_MCA_rmaps_base_display_map=1
</span><br>
<span class="quotelev2">&gt;&gt;               Env[2]: OMPI_MCA_rds_hostfile_path=hostfile.lr
</span><br>
<span class="quotelev2">&gt;&gt;               Env[3]: 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_precondition_transports=1405b3b501aa4086-00dbc7151c7348e1
</span><br>
<span class="quotelev2">&gt;&gt;               Env[4]: OMPI_MCA_rds=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[5]: OMPI_MCA_ras=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[6]: OMPI_MCA_rmaps=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[7]: OMPI_MCA_pls=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[8]: OMPI_MCA_rmgr=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Working dir: 
</span><br>
<span class="quotelev2">&gt;&gt; /global/home/users/kmuriki/sample_executables/pub (user: 0)
</span><br>
<span class="quotelev2">&gt;&gt;               Num maps: 0
</span><br>
<span class="quotelev2">&gt;&gt;       Num elements in nodes list: 2
</span><br>
<span class="quotelev2">&gt;&gt;       Mapped node:
</span><br>
<span class="quotelev2">&gt;&gt;               Cell: 0 Nodename: n0172.lr      Launch id: -1   Username: 
</span><br>
<span class="quotelev2">&gt;&gt; NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Daemon name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Oversubscribed: False   Num elements in procs list: 2
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,0]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 0    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,1]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 1    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Mapped node:
</span><br>
<span class="quotelev2">&gt;&gt;               Cell: 0 Nodename: n0173.lr      Launch id: -1   Username: 
</span><br>
<span class="quotelev2">&gt;&gt; NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Daemon name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Oversubscribed: False   Num elements in procs list: 2
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,2]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 2    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,3]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 3    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           3
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           1
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           2
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           0
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           2
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  0.133496046066284
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           3
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  0.148098945617676
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           0
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  0.113168954849243
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           1
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  0.145189046859741
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; II) Payload size 80K bytes using GiGE Network:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$ mpirun -v -display-map --mca btl tcp,self -np 4 
</span><br>
<span class="quotelev2">&gt;&gt; -hostfile hostfile.lr ./testbcast.80000
</span><br>
<span class="quotelev2">&gt;&gt; [n0005.scs00:13928]  Map for job: 1     Generated by mapping mode: byslot
</span><br>
<span class="quotelev2">&gt;&gt;       Starting vpid: 0        Vpid range: 4   Num app_contexts: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Data for app_context: index 0   app: ./testbcast.80000
</span><br>
<span class="quotelev2">&gt;&gt;               Num procs: 4
</span><br>
<span class="quotelev2">&gt;&gt;               Argv[0]: ./testbcast.80000
</span><br>
<span class="quotelev2">&gt;&gt;               Env[0]: OMPI_MCA_btl=tcp,self
</span><br>
<span class="quotelev2">&gt;&gt;               Env[1]: OMPI_MCA_rmaps_base_display_map=1
</span><br>
<span class="quotelev2">&gt;&gt;               Env[2]: OMPI_MCA_rds_hostfile_path=hostfile.lr
</span><br>
<span class="quotelev2">&gt;&gt;               Env[3]: 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_precondition_transports=305b93d4acc82685-12bbf20d2e6d250b
</span><br>
<span class="quotelev2">&gt;&gt;               Env[4]: OMPI_MCA_rds=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[5]: OMPI_MCA_ras=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[6]: OMPI_MCA_rmaps=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[7]: OMPI_MCA_pls=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[8]: OMPI_MCA_rmgr=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Working dir: 
</span><br>
<span class="quotelev2">&gt;&gt; /global/home/users/kmuriki/sample_executables/pub (user: 0)
</span><br>
<span class="quotelev2">&gt;&gt;               Num maps: 0
</span><br>
<span class="quotelev2">&gt;&gt;       Num elements in nodes list: 2
</span><br>
<span class="quotelev2">&gt;&gt;       Mapped node:
</span><br>
<span class="quotelev2">&gt;&gt;               Cell: 0 Nodename: n0172.lr      Launch id: -1   Username: 
</span><br>
<span class="quotelev2">&gt;&gt; NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Daemon name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Oversubscribed: False   Num elements in procs list: 2
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,0]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 0    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,1]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 1    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Mapped node:
</span><br>
<span class="quotelev2">&gt;&gt;               Cell: 0 Nodename: n0173.lr      Launch id: -1   Username: 
</span><br>
<span class="quotelev2">&gt;&gt; NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Daemon name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Oversubscribed: False   Num elements in procs list: 2
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,2]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 2    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,3]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 3    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           0
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           2
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           1
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           2
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  7.137393951416016E-002
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           3
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           3
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  1.110005378723145E-002
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           0
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  7.121706008911133E-002
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           1
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  3.379988670349121E-002
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; III) Payload size 80K bytes using IB Network:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$ mpirun -v -display-map --mca btl openib,self -np 4 
</span><br>
<span class="quotelev2">&gt;&gt; -hostfile hostfile.lr ./testbcast.80000
</span><br>
<span class="quotelev2">&gt;&gt; [n0005.scs00:13941]  Map for job: 1     Generated by mapping mode: byslot
</span><br>
<span class="quotelev2">&gt;&gt;       Starting vpid: 0        Vpid range: 4   Num app_contexts: 1
</span><br>
<span class="quotelev2">&gt;&gt;       Data for app_context: index 0   app: ./testbcast.80000
</span><br>
<span class="quotelev2">&gt;&gt;               Num procs: 4
</span><br>
<span class="quotelev2">&gt;&gt;               Argv[0]: ./testbcast.80000
</span><br>
<span class="quotelev2">&gt;&gt;               Env[0]: OMPI_MCA_btl=openib,self
</span><br>
<span class="quotelev2">&gt;&gt;               Env[1]: OMPI_MCA_rmaps_base_display_map=1
</span><br>
<span class="quotelev2">&gt;&gt;               Env[2]: OMPI_MCA_rds_hostfile_path=hostfile.lr
</span><br>
<span class="quotelev2">&gt;&gt;               Env[3]: 
</span><br>
<span class="quotelev2">&gt;&gt; OMPI_MCA_orte_precondition_transports=4cdb5ae2babe9010-709842ac574605f9
</span><br>
<span class="quotelev2">&gt;&gt;               Env[4]: OMPI_MCA_rds=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[5]: OMPI_MCA_ras=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[6]: OMPI_MCA_rmaps=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[7]: OMPI_MCA_pls=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Env[8]: OMPI_MCA_rmgr=proxy
</span><br>
<span class="quotelev2">&gt;&gt;               Working dir: 
</span><br>
<span class="quotelev2">&gt;&gt; /global/home/users/kmuriki/sample_executables/pub (user: 0)
</span><br>
<span class="quotelev2">&gt;&gt;               Num maps: 0
</span><br>
<span class="quotelev2">&gt;&gt;       Num elements in nodes list: 2
</span><br>
<span class="quotelev2">&gt;&gt;       Mapped node:
</span><br>
<span class="quotelev2">&gt;&gt;               Cell: 0 Nodename: n0172.lr      Launch id: -1   Username: 
</span><br>
<span class="quotelev2">&gt;&gt; NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Daemon name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Oversubscribed: False   Num elements in procs list: 2
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,0]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 0    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,1]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 1    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;       Mapped node:
</span><br>
<span class="quotelev2">&gt;&gt;               Cell: 0 Nodename: n0173.lr      Launch id: -1   Username: 
</span><br>
<span class="quotelev2">&gt;&gt; NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Daemon name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: NULL
</span><br>
<span class="quotelev2">&gt;&gt;               Oversubscribed: False   Num elements in procs list: 2
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,2]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 2    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;               Mapped proc:
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Name:
</span><br>
<span class="quotelev2">&gt;&gt;                       Data type: ORTE_PROCESS_NAME    Data Value: [0,1,3]
</span><br>
<span class="quotelev2">&gt;&gt;                       Proc Rank: 3    Proc PID: 0     App_context index: 0
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           0
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           3
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           1
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           1
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  2.550005912780762E-002
</span><br>
<span class="quotelev2">&gt;&gt; About to call broadcast           2
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           2
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast  2.154898643493652E-002
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           3
</span><br>
<span class="quotelev2">&gt;&gt; Done with call to broadcast           0
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast   38.1956140995026
</span><br>
<span class="quotelev2">&gt;&gt; time for bcast   38.2115209102631
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Finally here is the fortran code I'm playing with and I'm modifying the
</span><br>
<span class="quotelev2">&gt;&gt; payload size by changing the value of the variable 'ndat':
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$ more testbcast.f90
</span><br>
<span class="quotelev2">&gt;&gt; program em3d
</span><br>
<span class="quotelev2">&gt;&gt; implicit real*8 (a-h,o-z)
</span><br>
<span class="quotelev2">&gt;&gt; include 'mpif.h'
</span><br>
<span class="quotelev2">&gt;&gt; ! em3d_inv main driver
</span><br>
<span class="quotelev2">&gt;&gt; !  INITIALIZE MPI AND DETERMINE BOTH INDIVIDUAL PROCESSOR #
</span><br>
<span class="quotelev2">&gt;&gt; !   AND THE TOTAL NUMBER OF PROCESSORS
</span><br>
<span class="quotelev2">&gt;&gt; !
</span><br>
<span class="quotelev2">&gt;&gt; integer:: Proc
</span><br>
<span class="quotelev2">&gt;&gt; real*8, allocatable:: dbuf(:)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_INIT(ierror)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_RANK(MPI_COMM_WORLD,Proc,IERROR)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_COMM_SIZE(MPI_COMM_WORLD,Num_Proc,IERROR)
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; ndat=1000000
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; !print*,'bcasting to no of tasks',num_proc
</span><br>
<span class="quotelev2">&gt;&gt; allocate(dbuf(ndat))
</span><br>
<span class="quotelev2">&gt;&gt; do i=1,ndat
</span><br>
<span class="quotelev2">&gt;&gt; dbuf(i)=dble(i)
</span><br>
<span class="quotelev2">&gt;&gt; enddo
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; print*, 'About to call broadcast',proc
</span><br>
<span class="quotelev2">&gt;&gt; t1=MPI_WTIME()
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_BCAST(dbuf,ndat, &amp;
</span><br>
<span class="quotelev2">&gt;&gt;    MPI_DOUBLE_PRECISION,0,MPI_COMM_WORLD,ierror)
</span><br>
<span class="quotelev2">&gt;&gt; print*, 'Done with call to broadcast',proc
</span><br>
<span class="quotelev2">&gt;&gt; t2=MPI_WTIME()
</span><br>
<span class="quotelev2">&gt;&gt; write(*,*)'time for bcast',t2-t1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; deallocate(dbuf)
</span><br>
<span class="quotelev2">&gt;&gt; call MPI_FINALIZE(IERROR)
</span><br>
<span class="quotelev2">&gt;&gt; end program em3d
</span><br>
<span class="quotelev2">&gt;&gt; [kmuriki_at_n0005 pub]$
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
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Jeff Squyres
</span><br>
<span class="quotelev1">&gt; Cisco Systems
</span><br>
<span class="quotelev1">&gt;
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="7685.php">Jeff Squyres: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>Previous message:</strong> <a href="7683.php">Justin: "Re: [OMPI users] Deadlock on large numbers of processors"</a>
<li><strong>In reply to:</strong> <a href="7680.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="7686.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
<li><strong>Reply:</strong> <a href="7686.php">Jeff Squyres: "Re: [OMPI users] slow MPI_BCast for messages size from 24K bytes to 800K bytes."</a>
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
