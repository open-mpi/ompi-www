<?
$subject_val = "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep 16 10:57:07 2010" -->
<!-- isoreceived="20100916145707" -->
<!-- sent="Thu, 16 Sep 2010 16:57:01 +0200" -->
<!-- isosent="20100916145701" -->
<!-- name="Samuel Thibault" -->
<!-- email="samuel.thibault_at_[hidden]" -->
<!-- subject="Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch" -->
<!-- id="20100916145701.GJ5420_at_const.bordeaux.inria.fr" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="4C91B1DB.3060307_at_au1.ibm.com" -->
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
<strong>From:</strong> Samuel Thibault (<em>samuel.thibault_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-09-16 10:57:01
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1299.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1302.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1302.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Alexey Kardashevskiy, le Thu 16 Sep 2010 15:57:47 +1000, a &#233;crit :
<br>
<span class="quotelev3">&gt; &gt;&gt;- where do I put IBM-specific code?
</span><br>
<span class="quotelev3">&gt; &gt;&gt;     
</span><br>
<span class="quotelev2">&gt; &gt;Is the device tree linux-specific ? If so, it can stay in linux file as
</span><br>
<span class="quotelev2">&gt; &gt;long as it's not 30k lines :) We already have both sysfs and
</span><br>
<span class="quotelev2">&gt; &gt;/proc/cpuinfo  code there anyway.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; It is powerpc-specific. It is mapped from the system firmware (aka bios) 
</span><br>
<span class="quotelev1">&gt; by the powerpc kernel. However it is just a folder within /proc so it is 
</span><br>
<span class="quotelev1">&gt; usual linux folder. But PowerPC might be not the only architecture which 
</span><br>
<span class="quotelev1">&gt; uses the same pathname for the same thing.
</span><br>
<p>AIUI from google searches, it is an Open Firmware standard, also
<br>
used on the OLPC, and thus would be not only for PowerPC.  Since
<br>
that's not really Linux-specific, it would take place somewhere
<br>
else than topology-linux.c, but the standard doesn't seem to say
<br>
how/where this tree is exposed.  Apparently there's even some sort
<br>
of text format for it, see arch/powerpc/boot/dts/*.dts.  I'd thus
<br>
say that all OS-independant code should go to a topology-of.c file,
<br>
and topology-linux.c would provide generic tree functions to browse
<br>
/proc/device-tree, i.e. of_get_str, of_get_int_arr, and generic tree
<br>
browsing functions, which topology-of.c can then use to browse the
<br>
tree and fetch information without knowing where it is taken from. A
<br>
topology-dts.c file would provide the same functions, but this time
<br>
providing data from a .dts file, and that combination could be a backend
<br>
replacing the /proc and /sys parsing completely, similarly to loading a
<br>
.xml file. Note that I'm not asking you to do all this, I'm just asking
<br>
to rework the function interfaces a little bit to have things already
<br>
cleanly separated for anybody who would feel like adding another OS
<br>
support or parsing .dts files some day, I believe that shouldn't be too
<br>
much work for you.
<br>
<p><span class="quotelev1">&gt;From what I can read in drivers/of/fdt.c, the binary values are passed
</span><br>
directly from the table in memory. I wonder which endian order this is
<br>
supposed to be, but since I can see be32_to_cpu all around in the code
<br>
there, I guess it is assumed to be all big endian. There are thus also a
<br>
few fixes to be done in your code:
<br>
<p>- Make sure you have proper sizes: code like
<br>
<p>unsigned int reg = -1;
<br>
if (0 != of_get_int_arr(cpu, &quot;reg&quot;, &amp;reg, sizeof(reg), root_fd))
<br>
<p>is not really safe, you should use uint32_t to make sure of the size of
<br>
the integer.
<br>
<p>- Once the read is done, values need to be swapped on little-endian
<br>
&nbsp;&nbsp;machines.  You could use ntohl for that.
<br>
<p>- Constant-sized buffers are never a good idea. I know there are already
<br>
&nbsp;&nbsp;some in topology-linux, but that's not a reason when it should be easy
<br>
&nbsp;&nbsp;to make things properly :)
<br>
<p><p>It's thus say that you should rather provide the following functions:
<br>
<p>static inline int
<br>
of_get_int(const char *p, const char *p1, uint32_t *value, int root_fd);
<br>
<p>Gets one integer into `value'.
<br>
<p>static inline uint32_t *
<br>
of_get_int_arr(const char *p, const char *p1, int root_fd);
<br>
<p>Returns the array of integers.  Yes, this makes a lot of
<br>
allocation/deallocation, but that should be neglectible compared to the
<br>
system calls and will save us nasty length-bugs later.
<br>
<p>Samuel
<br>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="1301.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Previous message:</strong> <a href="1299.php">Brice Goglin: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>In reply to:</strong> <a href="1293.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="1302.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1302.php">Samuel Thibault: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
<li><strong>Reply:</strong> <a href="1305.php">Alexey Kardashevskiy: "Re: [hwloc-devel] hwloc powerpc rhel5 and power7 patch"</a>
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
