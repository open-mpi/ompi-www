<?
$subject_val = "Re: [OMPI users] problem configuring with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 11:57:23 2009" -->
<!-- isoreceived="20090811155723" -->
<!-- sent="Tue, 11 Aug 2009 11:57:13 -0400" -->
<!-- isosent="20090811155713" -->
<!-- name="Gus Correa" -->
<!-- email="gus_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem configuring with torque" -->
<!-- id="4A8194D9.3010802_at_ldeo.columbia.edu" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="F2C67A6E-C194-4B3C-B977-2EC0A46A5AAD_at_open-mpi.org" -->
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
<strong>Subject:</strong> Re: [OMPI users] problem configuring with torque<br>
<strong>From:</strong> Gus Correa (<em>gus_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 11:57:13
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Craig, list
<br>
<p>On my Rocks 4.3 cluster Torque is installed on /opt/torque,
<br>
not on /share/apps/torque.
<br>
<p>That directory path may have changed on more recent versions of Rocks,
<br>
or you may have installed another copy of
<br>
of Torque on /share/apps/torque.
<br>
However, have you checked where Torque is installed?
<br>
<p>My $0.02
<br>
<p>Gus Correa
<br>
<p>Ralph Castain wrote:
<br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; On Aug 10, 2009, at 10:36 PM, Craig Plaisance wrote:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; I am building openmpi on a cluster running rocks.  When I build using 
</span><br>
<span class="quotelev2">&gt;&gt; ./configure --with-tm=/share/apps/torque 
</span><br>
<span class="quotelev2">&gt;&gt; --prefix=/share/apps/openmpi/intel I receive the warning
</span><br>
<span class="quotelev2">&gt;&gt; configure: WARNING: Unrecognized options: --with-tm, 
</span><br>
<span class="quotelev2">&gt;&gt; --enable-ltdl-convenience
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; You can ignore these - there are some secondary operations going on that 
</span><br>
<span class="quotelev1">&gt; don't understand the options used in the general build.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; After running make and make install, I run ompi-info | grep tm and 
</span><br>
<span class="quotelev2">&gt;&gt; don't see the entries
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;                MCA pls: tm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev2">&gt;&gt;                MCA ras: tm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; I assume you are building a 1.3.x version? If so, the pls framework no 
</span><br>
<span class="quotelev1">&gt; longer exists, which is why you don't see it. You should see a plm tm 
</span><br>
<span class="quotelev1">&gt; module, though.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; If you aren't seeing a ras tm module, then it is likely that the system 
</span><br>
<span class="quotelev1">&gt; didn't find the required Torque support. Are you sure the given path is 
</span><br>
<span class="quotelev1">&gt; correct?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Note that the ras interface version has been bumped up, so it wouldn't 
</span><br>
<span class="quotelev1">&gt; show MCA v1.0 etc. - the numbers should be different now.
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Any idea what is happening?  Thanks!
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
<li><strong>Next message:</strong> <a href="10306.php">Jody Klymak: "[OMPI users] tcp connectivity OS X and 1.3.3"</a>
<li><strong>Previous message:</strong> <a href="10304.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10288.php">Ralph Castain: "Re: [OMPI users] problem configuring with torque"</a>
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
