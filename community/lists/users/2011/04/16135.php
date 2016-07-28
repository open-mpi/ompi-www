<?
$subject_val = "Re: [OMPI users] orte-odls-default:execv-error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 06:22:43 2011" -->
<!-- isoreceived="20110405102243" -->
<!-- sent="Tue, 5 Apr 2011 12:22:30 +0200" -->
<!-- isosent="20110405102230" -->
<!-- name="Reuti" -->
<!-- email="reuti_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte-odls-default:execv-error" -->
<!-- id="4C3F989C-F12E-4915-9552-184017D86A8E_at_staff.uni-marburg.de" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="5504C1518E7EAE4C912A724C518C079201FACD80_at_DURMAIL1.mds.ad.dur.ac.uk" -->
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
<strong>Subject:</strong> Re: [OMPI users] orte-odls-default:execv-error<br>
<strong>From:</strong> Reuti (<em>reuti_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 06:22:30
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16136.php">jody: "[OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>In reply to:</strong> <a href="16133.php">SLIM H.A.: "[OMPI users] orte-odls-default:execv-error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16139.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16139.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Am 05.04.2011 um 11:11 schrieb SLIM H.A.:
<br>
<p><span class="quotelev1">&gt; After an upgrade of our system I receive the following error message
</span><br>
<span class="quotelev1">&gt; (openmpi 1.4.2 with gridengine):
</span><br>
<p>Did you move openmpi 1.4.2 to a new (i.e. different) location?
<br>
<p>-- Reuti
<br>
<p><p><span class="quotelev2">&gt;&gt; quote
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    orte-odls-default:execv-error
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;    ...path/1.4.2/share/openmpi/help-odls-default.txt: Cannot send after
</span><br>
<span class="quotelev1">&gt; transport endpoint shut
</span><br>
<span class="quotelev1">&gt; down.  Sorry!
</span><br>
<span class="quotelev2">&gt;&gt; end quote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; and this is this is the section in the text file
</span><br>
<span class="quotelev1">&gt; ...path/1.4.2/share/openmpi/help-odls-default.txt that refers to
</span><br>
<span class="quotelev1">&gt; orte-odls-default:execv-error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; quote
</span><br>
<span class="quotelev1">&gt; [orte-odls-default:execv-error]
</span><br>
<span class="quotelev1">&gt; Could not execute the executable &quot;%s&quot;: %s
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; This could mean that your PATH or executable name is wrong, or that you
</span><br>
<span class="quotelev1">&gt; do not
</span><br>
<span class="quotelev1">&gt; have the necessary permissions.  Please ensure that the executable is
</span><br>
<span class="quotelev1">&gt; able to be
</span><br>
<span class="quotelev1">&gt; found and executed.&quot;
</span><br>
<span class="quotelev2">&gt;&gt; end quote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Does the execv-error mean that the file
</span><br>
<span class="quotelev1">&gt; ...path/1.4.2/share/openmpi/help-odls-default.txt was not accessible or
</span><br>
<span class="quotelev1">&gt; is there a different reason?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; The error message continues with
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt;&gt; quote
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [cn004:00591] mca: base: component_find: unable to open
</span><br>
<span class="quotelev1">&gt; ...path/1.4.2/lib/openmpi/mca_grpcomm_basic: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [cn004:00586] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; ...path/1.4.2/lib/openmpi/mca_notifier_syslog: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; [cn004:00585] mca: base: component_find: unable to open 
</span><br>
<span class="quotelev1">&gt; ...path/1.4.2/lib/openmpi/mca_notifier_syslog: file not found (ignored)
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev1">&gt;    find-available:none-found
</span><br>
<span class="quotelev1">&gt; But I couldn't open the help file:
</span><br>
<span class="quotelev1">&gt;    ...path/1.4.2/share/openmpi/help-mca-base.txt: Cannot send after
</span><br>
<span class="quotelev1">&gt; transport endpoint shutdown
</span><br>
<span class="quotelev1">&gt; .  Sorry!
</span><br>
<span class="quotelev1">&gt; ------------------------------------------------------------------------
</span><br>
<span class="quotelev1">&gt; --
</span><br>
<span class="quotelev1">&gt; [cn004:00586] PML ob1 cannot be selected
</span><br>
<span class="quotelev2">&gt;&gt; end quote
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; but there are .so and .la libraries in the directory
</span><br>
<span class="quotelev1">&gt; ...path/1.4.2/lib/openmpi
</span><br>
<span class="quotelev1">&gt; Are those the ones not found?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Thanks
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Henk
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
<li><strong>Next message:</strong> <a href="16136.php">jody: "[OMPI users] problems with the -xterm option"</a>
<li><strong>Previous message:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>In reply to:</strong> <a href="16133.php">SLIM H.A.: "[OMPI users] orte-odls-default:execv-error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16139.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16139.php">SLIM H.A.: "Re: [OMPI users] orte-odls-default:execv-error"</a>
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
