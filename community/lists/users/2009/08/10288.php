<?
$subject_val = "Re: [OMPI users] problem configuring with torque";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 11 05:09:20 2009" -->
<!-- isoreceived="20090811090920" -->
<!-- sent="Tue, 11 Aug 2009 03:09:05 -0600" -->
<!-- isosent="20090811090905" -->
<!-- name="Ralph Castain" -->
<!-- email="rhc_at_[hidden]" -->
<!-- subject="Re: [OMPI users] problem configuring with torque" -->
<!-- id="F2C67A6E-C194-4B3C-B977-2EC0A46A5AAD_at_open-mpi.org" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="4A80F550.4010508_at_virginia.edu" -->
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
<strong>From:</strong> Ralph Castain (<em>rhc_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-11 05:09:05
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10286.php">Craig Plaisance: "[OMPI users] problem configuring with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>Reply:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Aug 10, 2009, at 10:36 PM, Craig Plaisance wrote:
<br>
<p><span class="quotelev1">&gt; I am building openmpi on a cluster running rocks.  When I build  
</span><br>
<span class="quotelev1">&gt; using ./configure --with-tm=/share/apps/torque --prefix=/share/apps/ 
</span><br>
<span class="quotelev1">&gt; openmpi/intel I receive the warning
</span><br>
<span class="quotelev1">&gt; configure: WARNING: Unrecognized options: --with-tm, --enable-ltdl- 
</span><br>
<span class="quotelev1">&gt; convenience
</span><br>
<p>You can ignore these - there are some secondary operations going on  
<br>
that don't understand the options used in the general build.
<br>
<p><span class="quotelev1">&gt; After running make and make install, I run ompi-info | grep tm and  
</span><br>
<span class="quotelev1">&gt; don't see the entries
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;                MCA pls: tm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<span class="quotelev1">&gt;                MCA ras: tm (MCA v1.0, API v1.0, Component v1.0)
</span><br>
<p>I assume you are building a 1.3.x version? If so, the pls framework no  
<br>
longer exists, which is why you don't see it. You should see a plm tm  
<br>
module, though.
<br>
<p>If you aren't seeing a ras tm module, then it is likely that the  
<br>
system didn't find the required Torque support. Are you sure the given  
<br>
path is correct?
<br>
<p>Note that the ras interface version has been bumped up, so it wouldn't  
<br>
show MCA v1.0 etc. - the numbers should be different now.
<br>
<p><p><span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Any idea what is happening?  Thanks!
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
<li><strong>Next message:</strong> <a href="10289.php">Oskar Enoksson: "[OMPI users] How to make a job abort when one host dies?"</a>
<li><strong>Previous message:</strong> <a href="10287.php">Ralph Castain: "Re: [OMPI users] torque pbs behaviour..."</a>
<li><strong>In reply to:</strong> <a href="10286.php">Craig Plaisance: "[OMPI users] problem configuring with torque"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
<li><strong>Reply:</strong> <a href="10305.php">Gus Correa: "Re: [OMPI users] problem configuring with torque"</a>
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
