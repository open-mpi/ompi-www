<?
$subject_val = "Re: [OMPI devel] SC13 birds of a feather";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Dec  4 09:52:12 2013" -->
<!-- isoreceived="20131204145212" -->
<!-- sent="Wed, 4 Dec 2013 14:52:11 +0000" -->
<!-- isosent="20131204145211" -->
<!-- name="Jeff Squyres (jsquyres)" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI devel] SC13 birds of a feather" -->
<!-- id="F019D24C-D2CA-415C-9202-6112FBB4EC50_at_cisco.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAMD57ocYE=+r_uN+JfK9RfPpTKjODt-Hhhc2qm0Cbbqu4RW0zA_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI devel] SC13 birds of a feather<br>
<strong>From:</strong> Jeff Squyres (jsquyres) (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2013-12-04 09:52:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13368.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13383.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13383.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Ralph -- let's chat about this in Chicago next Friday.  I'll add it to the agenda on the wiki.  I assume this would not be difficult stuff; we don't really need to do anything fancy at all.  I think we just want to sketch out what exactly we want to do, and it could probably be done in a day or three.
<br>
<p>(Thanks for the idea, Samuel!)
<br>
<p><p>On Dec 4, 2013, at 7:49 AM, Ralph Castain &lt;rhc_at_[hidden]&gt; wrote:
<br>
<p><span class="quotelev1">&gt; FWIW: ORTE already has a sensor framework in it that reads some of these things, so adding the coretemp etc is pretty trivial. These readings can be taken in the ORTE event thread on daemons, but we could allow procs to do so as well (if the app requests it), or can make it driven via the MPI_T function. If we use the event engine, we could have ORTE push those values into the internal database, and then provide an MPI_T access to retrieve them.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I'm working on the monitoring section over the next few weeks and can add the data collection part. If Jeff or someone can point me to the required MPI_T &quot;glue&quot;, I can add that too.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Wed, Dec 4, 2013 at 4:23 AM, Chris Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev1">&gt; On Wed, 4 Dec 2013 11:39:29 AM Jeff Squyres wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; On Dec 3, 2013, at 7:54 PM,
</span><br>
<span class="quotelev2">&gt; &gt; Christopher Samuel &lt;samuel_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt; &gt; Would it make any sense to expose system/environmental/thermal
</span><br>
<span class="quotelev3">&gt; &gt; &gt; information to the application via MPI_T ?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Hmm.  Interesting idea.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Phew. :-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; Is the best way to grab such stuff via IPMI?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I don't think so, that means either having the process have permissions to
</span><br>
<span class="quotelev1">&gt; access /dev/ipmi* or needing to talk over the network to the adapter, neither
</span><br>
<span class="quotelev1">&gt; of which are likely to be desirable (or even possible, our iDataplex IMMs are
</span><br>
<span class="quotelev1">&gt; not accessible from the compute nodes).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; However, using the coretemp kernel module means you get access to at least
</span><br>
<span class="quotelev1">&gt; information about CPU temperatures on Intel systems:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.${A}/temp${B}_input
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; which contains the core temperature in 100ths of a degree Celsius and are
</span><br>
<span class="quotelev1">&gt; world readable.  You also get access to the various thermal trip points and
</span><br>
<span class="quotelev1">&gt; alarms.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The ${B} value is 1 for the CPU package (SandyBridge or later only), then
</span><br>
<span class="quotelev1">&gt; sequentially for the physical cores.  ${A} is 0 for the first socket, then
</span><br>
<span class="quotelev1">&gt; max($B of $A)+1 for the next socket, etc..
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; So on the test login node of our 2010 era Nehalem iDataplex you get a file per
</span><br>
<span class="quotelev1">&gt; CPU core but nothing for the socket, viz:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_merri-test ~]# ls /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp5_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.4/temp5_input
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_merri-test ~]# cat /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; 52000
</span><br>
<span class="quotelev1">&gt; 52000
</span><br>
<span class="quotelev1">&gt; 52000
</span><br>
<span class="quotelev1">&gt; 53000
</span><br>
<span class="quotelev1">&gt; 59000
</span><br>
<span class="quotelev1">&gt; 55000
</span><br>
<span class="quotelev1">&gt; 58000
</span><br>
<span class="quotelev1">&gt; 56000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On the test login node of our SandyBridge iDataplex delivered mid year we get
</span><br>
<span class="quotelev1">&gt; the package as well:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_barcoo-test ~]# ls /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp1_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp5_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp6_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.0/temp7_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp1_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp2_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp3_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp4_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp5_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp6_input
</span><br>
<span class="quotelev1">&gt; /sys/bus/platform/devices/coretemp.6/temp7_input
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; [root_at_barcoo-test ~]# cat /sys/bus/platform/devices/coretemp.*/*input*
</span><br>
<span class="quotelev1">&gt; 44000
</span><br>
<span class="quotelev1">&gt; 43000
</span><br>
<span class="quotelev1">&gt; 44000
</span><br>
<span class="quotelev1">&gt; 42000
</span><br>
<span class="quotelev1">&gt; 43000
</span><br>
<span class="quotelev1">&gt; 38000
</span><br>
<span class="quotelev1">&gt; 44000
</span><br>
<span class="quotelev1">&gt; 37000
</span><br>
<span class="quotelev1">&gt; 33000
</span><br>
<span class="quotelev1">&gt; 37000
</span><br>
<span class="quotelev1">&gt; 32000
</span><br>
<span class="quotelev1">&gt; 34000
</span><br>
<span class="quotelev1">&gt; 36000
</span><br>
<span class="quotelev1">&gt; 33000
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; There's more information in $KERNEL_SOURCE/Documentation/hwmon/coretemp.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Both those systems are running RHEL6, so it should be fairly well supported
</span><br>
<span class="quotelev1">&gt; *if* the sysadmin has loaded the modules.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; That might well be do-able, since there's no performance penalty for reading
</span><br>
<span class="quotelev2">&gt; &gt; such values until you actually read the values (i.e., we don't actively
</span><br>
<span class="quotelev2">&gt; &gt; monitor these values in OMPI's overall progression engine; they're only
</span><br>
<span class="quotelev2">&gt; &gt; read when the application invokes an MPI_T read function).
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Indeed, these *shouldn't* hang trying to read them. ;-)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; cheers,
</span><br>
<span class="quotelev1">&gt; Chris
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt;  Christopher Samuel        Senior Systems Administrator
</span><br>
<span class="quotelev1">&gt;  VLSCI - Victorian Life Sciences Computation Initiative
</span><br>
<span class="quotelev1">&gt;  Email: samuel_at_[hidden] Phone: +61 (0)3 903 55545
</span><br>
<span class="quotelev1">&gt;  <a href="http://www.vlsci.org.au/">http://www.vlsci.org.au/</a>      <a href="http://twitter.com/vlsci">http://twitter.com/vlsci</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; devel mailing list
</span><br>
<span class="quotelev1">&gt; devel_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/devel">http://www.open-mpi.org/mailman/listinfo.cgi/devel</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
jsquyres_at_[hidden]
For corporate legal information go to: <a href="http://www.cisco.com/web/about/doing_business/legal/cri/">http://www.cisco.com/web/about/doing_business/legal/cri/</a>
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="13368.php">Nathan Hjelm: "Re: [OMPI devel] [EXTERNAL] Re: Change request for include/mpif-config.h"</a>
<li><strong>Previous message:</strong> <a href="13366.php">Igor Ivanov: "Re: [OMPI devel] bug in mca framework?"</a>
<li><strong>In reply to:</strong> <a href="13358.php">Ralph Castain: "Re: [OMPI devel] SC13 birds of a feather"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="13383.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
<li><strong>Reply:</strong> <a href="13383.php">Christopher Samuel: "Re: [OMPI devel] SC13 birds of a feather"</a>
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
