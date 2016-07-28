<?
$subject_val = "Re: [OMPI devel] orte-dvm and orte_max_vm_size";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 17 17:37:08 2015" -->
<!-- isoreceived="20150917213708" -->
<!-- sent="Thu, 17 Sep 2015 23:37:03 +0200" -->
<!-- isosent="20150917213703" -->
<!-- name="Mark Santcroos" -->
<!-- email="mark.santcroos_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] orte-dvm and orte_max_vm_size" -->
<!-- id="0D4D70A6-9BD9-4EE0-897A-E6FA9D3E5E81_at_rutgers.edu" -->
<!-- charset="utf-8" -->
<!-- inreplyto="A2BD8822-2E5B-43A2-80A3-F37AFECAECF7_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI devel] orte-dvm and orte_max_vm_size<br>
<strong>From:</strong> Mark Santcroos (<em>mark.santcroos_at_[hidden]</em>)<br>
<strong>Date:</strong> 2015-09-17 17:37:03
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18073.php">Алексей Рыжих: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18071.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="17934.php">Ralph Castain: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Ralph,
<br>
<p>Sorry for the late reply, something along the lines of &quot;swamped&quot; ;-)
<br>
<p><span class="quotelev1">&gt; On 03 Sep 2015, at 16:04 , Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; The purpose of orte_max_vm_size is to subdivide the allocation - i.e., for a given mpirun execution, you can specify to only use a certain number of the allocated nodes. If you want to further limit the VM to specific nodes in the allocation, then you would use -host option.
</span><br>
<p>*nods* Thanks, thats also how I interpreted it.
<br>
<p><span class="quotelev1">&gt; It&#226;&#128;&#153;s a little more complicated for your use-case as orte-dvm defines the VM, not orte-submit. The latter simply tells orte-dvm to launch an application - the daemons have already been established by orte-dvm and cannot change. So if you want to setup orte-dvm and then submit to only some of the nodes, you would have to use the -host option. Note that -host supports an extended syntax for this purpose - you can ask for a specific number of &#226;&#128;&#156;empty&#226;&#128;&#157; nodes, you can tell it to use only so many slots on a node, etc.
</span><br>
<p>Ack. My question originated from running the dvm on a limited set.
<br>
<p><span class="quotelev1">&gt; I&#226;&#128;&#153;m confused by your examples because the max_vm_size values don&#226;&#128;&#153;t seem right. If you have a VM of size 1 or 2, then max_vm_size can only be 1 or 2. You can&#226;&#128;&#153;t have a max_vm_size larger than the number of available nodes. This is probably the source of the problem you are seeing - I can add some protection to ensure this doesn&#226;&#128;&#153;t happen.
</span><br>
<p>I screwed up my write-up, the actual calls were correct, but I understand your confusion :-)
<br>
(In my code I have a &quot;reservation size&quot;, which I mixed up with the VM size in my original mail)
<br>
<p><span class="quotelev1">&gt; We don&#226;&#128;&#153;t appear to support either -host or -np as MCA params.
</span><br>
<span class="quotelev1">&gt; I&#226;&#128;&#153;m not sure -np would make sense,
</span><br>
<p>I probably agree with that.
<br>
<p><span class="quotelev1">&gt; but we could add a param for -host.
</span><br>
<p>Yeah, that would help.
<br>
<p><span class="quotelev1">&gt; We do have a param for the default hostfile, but that probably wouldn&#226;&#128;&#153;t help here.
</span><br>
<p>I was expecting such a thing actually, that also raised my MCA question.
<br>
<p><span class="quotelev1">&gt; We can certainly extend the orte-dvm and orte-submit cmd lines. I only brought over a minimal set at first in order to get things running quickly, but no problem with increasing capability. Just a question of finding a little time.
</span><br>
<p>Fully understandable!
<br>
<p><span class="quotelev1">&gt; For ompi_info, try doing &#226;&#128;&#156;ompi_info -l 9&#226;&#128;&#157; to get the full output of params.
</span><br>
<p>Right I tried that. So I don't understand it completely or it doesn't work as expected, as I dont manage to get e.g. &quot;orte_max_vm_size&quot; as output from that.
<br>
<p>(I also believe that -all sets the level to 9 already)
<br>
<p>Thanks!
<br>
<p>Mark
<br>
<p><p><span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; On Sep 3, 2015, at 5:08 AM, Mark Santcroos &lt;mark.santcroos_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Hi,
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I've been running into some funny issue with using orte-dvm (Hi Ralph ;-) and trying to define the size of the created vm and for that I use &quot;--mca orte_max_vm_size&quot; which in general seems to work.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; In this example I have a PBS job of 4 nodes and want to run the DVM on &lt; 4 nodes.
</span><br>
<span class="quotelev2">&gt;&gt; If I create the VM with size 3 or 4 (max_vm_size 1 and 0 respectively) everything works as expected.
</span><br>
<span class="quotelev2">&gt;&gt; However, when I create a VM of size 1 or 2 (max_vm_size 3 and 2 respectively) I get the stack trace below once I use orte-submit to start something within the VM.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [[39239,0],0] orted:comm:process_commands() Processing Command: ORTE_DAEMON_SPAWN_JOB_CMD
</span><br>
<span class="quotelev2">&gt;&gt; orte-dvm: ../../../../../src/ompi/opal/class/opal_list.h:547: _opal_list_append: Assertion `0 == item-&gt;opal_list_item_refcount' failed.
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] *** Process received signal ***
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] Signal: Aborted (6)
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] Signal code:  (-6)
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 0] /lib64/libpthread.so.0(+0xf810)[0x2ba3e274a810]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 1] /lib64/libc.so.6(gsignal+0x35)[0x2ba3e298b885]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 2] /lib64/libc.so.6(abort+0x181)[0x2ba3e298ce61]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 3] /lib64/libc.so.6(__assert_fail+0xf0)[0x2ba3e2984740]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 4] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/libopen-rte.so.0(+0x83f16)[0x2ba3e1687f16]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 5] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/libopen-rte.so.0(orte_plm_base_setup_virtual_machine+0x473)[0x2ba3e16907fe]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 6] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/openmpi/mca_plm_alps.so(+0x274d)[0x2ba3e666574d]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 7] /global/homes/m/marksant/openmpi/edison/installed/HEAD/lib/libopen-pal.so.0(opal_libevent2022_event_base_loop+0xd81)[0x2ba3e198cee1]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 8] /global/homes/m/marksant/openmpi/edison/installed/HEAD/bin/orte-dvm[0x402e20]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [ 9] /lib64/libc.so.6(__libc_start_main+0xe6)[0x2ba3e2977c36]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] [10] /global/homes/m/marksant/openmpi/edison/installed/HEAD/bin/orte-dvm[0x401d19]
</span><br>
<span class="quotelev2">&gt;&gt; [nid01280:02498] *** End of error message ***
</span><br>
<span class="quotelev2">&gt;&gt; [nid05888:25419] [[39239,0],1]:../../../../../../src/ompi/orte/mca/errmgr/default_orted/errmgr_default_orted.c(251) updating exit status to 1
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Some questions:
</span><br>
<span class="quotelev2">&gt;&gt; - Am I understanding the purpose of orte_max_vm_size correctly?
</span><br>
<span class="quotelev2">&gt;&gt; - If so, then it seems some refcounting if off. Not sure where to start looking though ...
</span><br>
<span class="quotelev2">&gt;&gt; - I would rather have a bit more flexible way of specifying the size of the VM, but currently the orte-dvm command line parameters are limited. Would it be a matter of copying over some of the &quot;-host&quot; parameter stuff from orte-run or is it more involved?
</span><br>
<span class="quotelev2">&gt;&gt; - Can I configure the -host, -np, etc parameters also via MCA settings?
</span><br>
<span class="quotelev2">&gt;&gt; - Whats the magic combination of parameters to get all information about of ompi_info? As I can't find a way to even &quot;find&quot; the orte_max_vm_size parameter out of it, while I know it exists.
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Thanks!
</span><br>
<span class="quotelev2">&gt;&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; Mark
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; devel mailing list
</span><br>
<span class="quotelev2">&gt;&gt; devel_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev2">&gt;&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17930.php">http://www.open-mpi.org/community/lists/devel/2015/09/17930.php</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; Subscription: <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; Link to this post: <a href="http://www.open-mpi.org/community/lists/devel/2015/09/17934.php">http://www.open-mpi.org/community/lists/devel/2015/09/17934.php</a>
</span><br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="18073.php">Алексей Рыжих: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>Previous message:</strong> <a href="18071.php">George Bosilca: "Re: [OMPI devel] The issue with OMPI_FREE_LIST_GET_MT()"</a>
<li><strong>In reply to:</strong> <a href="17934.php">Ralph Castain: "Re: [OMPI devel] orte-dvm and orte_max_vm_size"</a>
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
