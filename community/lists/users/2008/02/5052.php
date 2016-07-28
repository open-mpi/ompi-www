<?
$subject_val = "Re: [OMPI users] openmpi/openib problems";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Feb 20 12:54:55 2008" -->
<!-- isoreceived="20080220175455" -->
<!-- sent="Wed, 20 Feb 2008 11:53:46 -0600" -->
<!-- isosent="20080220175346" -->
<!-- name="jessie puls" -->
<!-- email="pulsj_at_[hidden]" -->
<!-- subject="Re: [OMPI users] openmpi/openib problems" -->
<!-- id="47BC692A.2090700_at_uni.edu" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="F340DE81-0FF3-45EB-A667-693B6538EA83_at_cisco.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] openmpi/openib problems<br>
<strong>From:</strong> jessie puls (<em>pulsj_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-02-20 12:53:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5053.php">Albert Babinskas: "[OMPI users] Error while make install all"</a>
<li><strong>Previous message:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5065.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5065.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Secifically Jobs are not being handed to other nodes ever.  Running
<br>
<p>mpirun -mca btl openib,self -np 20 /bin/hostname
<br>
<p>will return the same hostname 20 times, even if I specify -bynode as an 
<br>
argument. They are Debian systems with 2 dual core processors in them, 
<br>
and have the most recent open fabrics user and kernel packages from 
<br>
openfabrics.org installed.  I'm running a 2.6.18 kernel.  My subnet 
<br>
manager is on my switch, which is a Cisco SFS 7000.  Also, as I 
<br>
mentioned earlier everything is ok when I am using ipoib, but switching 
<br>
to verbs is giving me a lot of problems.
<br>
<p>Output from ibv_devinfo:
<br>
<p>hca_id: mthca0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;fw_ver:                         1.2.0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;node_guid:                      0030:487c:a278:0000
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sys_image_guid:                 0030:487c:a278:0003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_id:                      0x02c9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;vendor_part_id:                 25204
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;hw_ver:                         0xA0
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;board_id:                       SM_0000000003
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;phys_port_cnt:                  1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port:   1
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;state:                  PORT_ACTIVE (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;max_mtu:                2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;active_mtu:             2048 (4)
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;sm_lid:                 2
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lid:               9
<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;port_lmc:               0x00
<br>
<p>With the obvious exception of the node_guid, and sys_image_guid this is 
<br>
the same across all of the nodes.  I'm also attaching config.log and the 
<br>
output from ompi_info --all
<br>
<p>ulimit -l reports unlimited
<br>
<p><p><p>Jeff Squyres wrote:
<br>
<span class="quotelev1">&gt; Can you be more specific about what problems you're seeing?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt;      <a href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the rdma mpool is the plugin that is used by the openib btl;  
</span><br>
<span class="quotelev1">&gt; there is no openib mpool (there used to be, but its functionality got  
</span><br>
<span class="quotelev1">&gt; generalized and put into the &quot;rdma&quot; plugin).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Feb 19, 2008, at 12:35 PM, jessie puls wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; jessie puls wrote:
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Hi all,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; I'm having problems getting openmpi to work correctly using verbs on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; some systems.  It's been working using openib for quite some time,  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; but I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; need to get it working using verbs for some research I'm doing.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This would make a whole lot more sense if I'd typed it correctly.   
</span><br>
<span class="quotelev2">&gt;&gt; It's
</span><br>
<span class="quotelev2">&gt;&gt; been working using ipoib.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Anyway
</span><br>
<span class="quotelev3">&gt;&gt;&gt; all seems to be good on the openib side of things.  ibv_devinfo and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; ibv_devices returns device information, and they are listed as  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; active on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; each node.  Also all hosts are visible to each other (ibhosts shows a
</span><br>
<span class="quotelev3">&gt;&gt;&gt; full list).
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; The problem I see with openmpi is I have the openib btl, but not the
</span><br>
<span class="quotelev3">&gt;&gt;&gt; openib mpool, and when looking at the contents of ompi/mca/mpool/ I
</span><br>
<span class="quotelev3">&gt;&gt;&gt; don't see openib there (sm and rdma are both listed and ompi_info  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; shows
</span><br>
<span class="quotelev3">&gt;&gt;&gt; they've been included in the build).  Any help would be appreciated.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Thanks,
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Jessie
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<p><p>
<br><hr>
<ul>
<li>application/x-gzip attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5052/info.tar.gz">info.tar.gz</a>
</ul>
<!-- attachment="info.tar.gz" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5053.php">Albert Babinskas: "[OMPI users] Error while make install all"</a>
<li><strong>Previous message:</strong> <a href="5051.php">Ben Allan: "Re: [OMPI users] mpi.h macro naming"</a>
<li><strong>In reply to:</strong> <a href="5049.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="5065.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
<li><strong>Reply:</strong> <a href="5065.php">Jeff Squyres: "Re: [OMPI users] openmpi/openib problems"</a>
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
