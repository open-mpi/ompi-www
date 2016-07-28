<?
$subject_val = "Re: [OMPI users] segfault with -pernode on 1.4.2";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jun  7 21:59:55 2010" -->
<!-- isoreceived="20100608015955" -->
<!-- sent="Mon, 7 Jun 2010 19:59:45 -0600" -->
<!-- isosent="20100608015945" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] segfault with -pernode on 1.4.2" -->
<!-- id="7E50FA9B-9550-45CF-BF45-953389D90939_at_open-mpi.org" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="AANLkTillYEOXLZ2TIUNAqc6qlMtbUS9XKy2VwWnjNmgP_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] segfault with -pernode on 1.4.2<br>
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-06-07 21:59:45
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13246.php">Rui: "[OMPI users] Question about open-mpi fault tolerance machanism"</a>
<li><strong>Previous message:</strong> <a href="13244.php">S. Levent Yilmaz: "[OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13244.php">S. Levent Yilmaz: "[OMPI users] segfault with -pernode on 1.4.2"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks for reporting this.
<br>
<p>-pernode is just -npernode 1 - see the following ticket. Not sure when a fix will come out.
<br>
<p><a href="https://svn.open-mpi.org/trac/ompi/ticket/2431">https://svn.open-mpi.org/trac/ompi/ticket/2431</a>
<br>
<p><p>On Jun 7, 2010, at 4:27 PM, S. Levent Yilmaz wrote:
<br>
<p><span class="quotelev1">&gt; Dear All, 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I recently installed 1.4.2 version, and am having a problem specific to this version only (or so it seems). Before I lay out the details please note that  I am building 1.4.2 *exactly* the same as I built 1.4.1: same compiler options, same OpenIB and other system libraries, same configure options, and same everything. Version 1.4.1 doesn't have this issue
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message is the following: 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; $ mpirun -pernode ./hello
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n90:21674] *** Process received signal ***
</span><br>
<span class="quotelev1">&gt; [n90:21674] Signal: Segmentation fault (11)
</span><br>
<span class="quotelev1">&gt; [n90:21674] Signal code: Address not mapped (1)
</span><br>
<span class="quotelev1">&gt; [n90:21674] Failing at address: 0x50
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 0] /lib64/libpthread.so.0 [0x3654a0e4c0]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 1] /opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0(orte_util_encode_pidmap+0xa7) [0x2b6b2f299b87]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 2] /opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0(orte_odls_base_default_get_add_procs_data+0x3ce) [0x2b6b2f2baefe]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 3] /opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0(orte_plm_base_launch_apps+0xd5) [0x2b6b2f2ce1e5]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 4] /opt/fermi/openmpi/1.4.2/intel/fast/lib/libopen-rte.so.0 [0x2b6b2f2d17ee]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 5] mpirun [0x404cff]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 6] mpirun [0x403e48]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 7] /lib64/libc.so.6(__libc_start_main+0xf4) [0x3653e1d974]
</span><br>
<span class="quotelev1">&gt; [n90:21674] [ 8] mpirun [0x403d79]
</span><br>
<span class="quotelev1">&gt; [n90:21674] *** End of error message ***
</span><br>
<span class="quotelev1">&gt; Segmentation fault
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [n74:21733] [[41942,0],1] routed:binomial: Connection to lifeline [[41942,0],0] lost      
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This last line is  from mpirun, not the executable. The executable is a simple hello world. All is well without the -pernode flag. All is well even when there is only one process per node (say, if so allocated over PBS) and -pernode flag is not used. 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Attached are what is asked herein: <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>  except the Infiniband specific details. I'll be happy to provide if that is necessary, but note that the failure is the same if I used -mca btl self,tcp 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thank you, 
</span><br>
<span class="quotelev1">&gt; Levent
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; &lt;config.log.gz&gt;&lt;ompi_info.all.gz&gt;_______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-13245/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13246.php">Rui: "[OMPI users] Question about open-mpi fault tolerance machanism"</a>
<li><strong>Previous message:</strong> <a href="13244.php">S. Levent Yilmaz: "[OMPI users] segfault with -pernode on 1.4.2"</a>
<li><strong>In reply to:</strong> <a href="13244.php">S. Levent Yilmaz: "[OMPI users] segfault with -pernode on 1.4.2"</a>
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
