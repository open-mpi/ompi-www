<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Fri Sep 17 06:01:53 2010" -->
<!-- isoreceived="20100917100153" -->
<!-- sent="Fri, 17 Sep 2010 20:01:46 +1000" -->
<!-- isosent="20100917100146" -->
<!-- name="Alexey Kardashevskiy" -->
<!-- email="aik_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="4C933C8A.7090706_at_au1.ibm.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="20100916145701.GJ5420_at_const.bordeaux.inria.fr" -->
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
<strong>Subject:</strong> Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch<br>
<strong>From:</strong> Alexey Kardashevskiy (<em>aik_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-17 06:01:46
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1306.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1304.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>In reply to:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1306.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1306.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1321.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1323.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On 17/09/10 00:57, Samuel Thibault wrote:
<br>
<span class="quotelev1">&gt; Alexey Kardashevskiy, le Thu 16 Sep 2010 15:57:47 +1000, a &#233;crit :
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; - where do I put IBM-specific code?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;          
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Is the device tree linux-specific ? If so, it can stay in linux file as
</span><br>
<span class="quotelev3">&gt;&gt;&gt; long as it's not 30k lines :) We already have both sysfs and
</span><br>
<span class="quotelev3">&gt;&gt;&gt; /proc/cpuinfo  code there anyway.
</span><br>
<span class="quotelev3">&gt;&gt;&gt;        
</span><br>
<span class="quotelev2">&gt;&gt; It is powerpc-specific. It is mapped from the system firmware (aka bios)
</span><br>
<span class="quotelev2">&gt;&gt; by the powerpc kernel. However it is just a folder within /proc so it is
</span><br>
<span class="quotelev2">&gt;&gt; usual linux folder. But PowerPC might be not the only architecture which
</span><br>
<span class="quotelev2">&gt;&gt; uses the same pathname for the same thing.
</span><br>
<span class="quotelev2">&gt;&gt;      
</span><br>
<span class="quotelev1">&gt; AIUI from google searches, it is an Open Firmware standard, also
</span><br>
<span class="quotelev1">&gt; used on the OLPC, and thus would be not only for PowerPC.  Since
</span><br>
<span class="quotelev1">&gt; that's not really Linux-specific, it would take place somewhere
</span><br>
<span class="quotelev1">&gt; else than topology-linux.c, but the standard doesn't seem to say
</span><br>
<span class="quotelev1">&gt; how/where this tree is exposed.  Apparently there's even some sort
</span><br>
<span class="quotelev1">&gt; of text format for it, see arch/powerpc/boot/dts/*.dts.  I'd thus
</span><br>
<span class="quotelev1">&gt; say that all OS-independant code should go to a topology-of.c file,
</span><br>
<span class="quotelev1">&gt; and topology-linux.c would provide generic tree functions to browse
</span><br>
<span class="quotelev1">&gt; /proc/device-tree, i.e. of_get_str, of_get_int_arr, and generic tree
</span><br>
<span class="quotelev1">&gt; browsing functions, which topology-of.c can then use to browse the
</span><br>
<span class="quotelev1">&gt; tree and fetch information without knowing where it is taken from. A
</span><br>
<span class="quotelev1">&gt; topology-dts.c file would provide the same functions, but this time
</span><br>
<span class="quotelev1">&gt; providing data from a .dts file, and that combination could be a backend
</span><br>
<span class="quotelev1">&gt; replacing the /proc and /sys parsing completely, similarly to loading a
</span><br>
<span class="quotelev1">&gt; .xml file. Note that I'm not asking you to do all this, I'm just asking
</span><br>
<span class="quotelev1">&gt; to rework the function interfaces a little bit to have things already
</span><br>
<span class="quotelev1">&gt; cleanly separated for anybody who would feel like adding another OS
</span><br>
<span class="quotelev1">&gt; support or parsing .dts files some day, I believe that shouldn't be too
</span><br>
<span class="quotelev1">&gt; much work for you.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Regarding topology walking - there is actually nothing device-tree 
<br>
special in reading strings and numbers from a device-tree, it is just 
<br>
common functions which (I think) should be placed in utils/misc.c. I 
<br>
named functions like hwloc_read_str.
<br>
<p>Regarding open firmware and device trees - yes, it is IEEE1275 which can 
<br>
be implemented anywhere. However, in our case, there are IBM-specific 
<br>
properties (ibm,phandle, ibm,ppc-interrupt-server#s) which make all this 
<br>
very IBM specific. I do not know how to deal with it better.
<br>
<p>I reworked the patch today, it is attached. It is made against today's 
<br>
SVN tree.
<br>
<p><p><span class="quotelev2">&gt; &gt; From what I can read in drivers/of/fdt.c, the binary values are passed
</span><br>
<span class="quotelev1">&gt; directly from the table in memory. I wonder which endian order this is
</span><br>
<span class="quotelev1">&gt; supposed to be, but since I can see be32_to_cpu all around in the code
</span><br>
<span class="quotelev1">&gt; there, I guess it is assumed to be all big endian. There are thus also a
</span><br>
<span class="quotelev1">&gt; few fixes to be done in your code:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Make sure you have proper sizes: code like
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; unsigned int reg = -1;
</span><br>
<span class="quotelev1">&gt; if (0 != of_get_int_arr(cpu, &quot;reg&quot;,&amp;reg, sizeof(reg), root_fd))
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; is not really safe, you should use uint32_t to make sure of the size of
</span><br>
<span class="quotelev1">&gt; the integer.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; - Once the read is done, values need to be swapped on little-endian
</span><br>
<span class="quotelev1">&gt;    machines.  You could use ntohl for that.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>The hwlow code is compiled on powerpc and reads device-tree on a powerpc 
<br>
machine. If endianess does not match in this case, we have got a big 
<br>
problem, this should not happen. Or I am missing something.
<br>
The point regarding uint32_t vs. (unsigned int) is taken.
<br>
<p><span class="quotelev1">&gt; - Constant-sized buffers are never a good idea. I know there are already
</span><br>
<span class="quotelev1">&gt;    some in topology-linux, but that's not a reason when it should be easy
</span><br>
<span class="quotelev1">&gt;    to make things properly :)
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>Fixed :)
<br>
<p><span class="quotelev1">&gt; It's thus say that you should rather provide the following functions:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; static inline int
</span><br>
<span class="quotelev1">&gt; of_get_int(const char *p, const char *p1, uint32_t *value, int root_fd);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Gets one integer into `value'.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>done :)
<br>
<p><span class="quotelev1">&gt; static inline uint32_t *
</span><br>
<span class="quotelev1">&gt; of_get_int_arr(const char *p, const char *p1, int root_fd);
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Returns the array of integers.  Yes, this makes a lot of
</span><br>
<span class="quotelev1">&gt; allocation/deallocation, but that should be neglectible compared to the
</span><br>
<span class="quotelev1">&gt; system calls and will save us nasty length-bugs later.
</span><br>
<span class="quotelev1">&gt;    
</span><br>
<p>How many integers were read by this function?  What allocator was used 
<br>
for the returned value? Sure I can presume it was malloc, but still it 
<br>
is not a good style :)
<br>
<p><p>Regarding the latest patch about numa nodes numbers - do I understand 
<br>
correctly that hwloc_cpuset_t is just a bit array which can be used 
<br>
everywhere where we need a bit array, not just for CPUs? :-)
<br>
<p>
<br><hr>
<ul>
<li>text/x-patch attachment: <a href="http://www.open-mpi.org/community/lists/hwloc-devel/att-1305/hwloc.device-tree.6.patch">hwloc.device-tree.6.patch</a>
</ul>
<!-- attachment="hwloc.device-tree.6.patch" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1306.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1304.php">Brice Goglin: "Re: [hwloc-devel] [hwloc-svn] svn:hwloc r2257"</a>
<li><strong>In reply to:</strong> <a href="1300.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1306.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1306.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1321.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1323.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
