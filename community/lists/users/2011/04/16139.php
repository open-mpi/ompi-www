<?
$subject_val = "Re: [OMPI users] orte-odls-default:execv-error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 09:57:44 2011" -->
<!-- isoreceived="20110405135744" -->
<!-- sent="Tue, 5 Apr 2011 14:57:02 +0100" -->
<!-- isosent="20110405135702" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte-odls-default:execv-error" -->
<!-- id="5504C1518E7EAE4C912A724C518C079201FACD82_at_DURMAIL1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4C3F989C-F12E-4915-9552-184017D86A8E_at_staff.uni-marburg.de" -->
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
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 09:57:02
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>In reply to:</strong> <a href="16135.php">Reuti: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi Reuti
<br>
<p>1.4.2 is still in the same location and I also built 1.4.3 anew. It
<br>
appeared the lustre and ib where not playing along and it is working
<br>
now.
<br>
<p>Thanks
<br>
<p>henk
<br>
<p><p><p><span class="quotelev1">&gt; -----Original Message-----
</span><br>
<span class="quotelev1">&gt; From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]]
</span><br>
On
<br>
<span class="quotelev1">&gt; Behalf Of Reuti
</span><br>
<span class="quotelev1">&gt; Sent: 05 April 2011 11:23
</span><br>
<span class="quotelev1">&gt; To: Open MPI Users
</span><br>
<span class="quotelev1">&gt; Subject: Re: [OMPI users] orte-odls-default:execv-error
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Am 05.04.2011 um 11:11 schrieb SLIM H.A.:
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev2">&gt; &gt; After an upgrade of our system I receive the following error message
</span><br>
<span class="quotelev2">&gt; &gt; (openmpi 1.4.2 with gridengine):
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; Did you move openmpi 1.4.2 to a new (i.e. different) location?
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev1">&gt; 
</span><br>
<span class="quotelev3">&gt; &gt;&gt; quote
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
---------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt; &gt;    orte-odls-default:execv-error
</span><br>
<span class="quotelev2">&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt; &gt;    ...path/1.4.2/share/openmpi/help-odls-default.txt: Cannot send
</span><br>
<span class="quotelev1">&gt; after
</span><br>
<span class="quotelev2">&gt; &gt; transport endpoint shut
</span><br>
<span class="quotelev2">&gt; &gt; down.  Sorry!
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end quote
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; and this is this is the section in the text file
</span><br>
<span class="quotelev2">&gt; &gt; ...path/1.4.2/share/openmpi/help-odls-default.txt that refers to
</span><br>
<span class="quotelev2">&gt; &gt; orte-odls-default:execv-error
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; quote
</span><br>
<span class="quotelev2">&gt; &gt; [orte-odls-default:execv-error]
</span><br>
<span class="quotelev2">&gt; &gt; Could not execute the executable &quot;%s&quot;: %s
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; This could mean that your PATH or executable name is wrong, or that
</span><br>
<span class="quotelev1">&gt; you
</span><br>
<span class="quotelev2">&gt; &gt; do not
</span><br>
<span class="quotelev2">&gt; &gt; have the necessary permissions.  Please ensure that the executable
</span><br>
is
<br>
<span class="quotelev2">&gt; &gt; able to be
</span><br>
<span class="quotelev2">&gt; &gt; found and executed.&quot;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end quote
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Does the execv-error mean that the file
</span><br>
<span class="quotelev2">&gt; &gt; ...path/1.4.2/share/openmpi/help-odls-default.txt was not accessible
</span><br>
<span class="quotelev1">&gt; or
</span><br>
<span class="quotelev2">&gt; &gt; is there a different reason?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; The error message continues with
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev3">&gt; &gt;&gt; quote
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
---------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; [cn004:00591] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; ...path/1.4.2/lib/openmpi/mca_grpcomm_basic: file not found
</span><br>
(ignored)
<br>
<span class="quotelev2">&gt; &gt; [cn004:00586] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; ...path/1.4.2/lib/openmpi/mca_notifier_syslog: file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev2">&gt; &gt; [cn004:00585] mca: base: component_find: unable to open
</span><br>
<span class="quotelev2">&gt; &gt; ...path/1.4.2/lib/openmpi/mca_notifier_syslog: file not found
</span><br>
<span class="quotelev1">&gt; (ignored)
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
---------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; Sorry!  You were supposed to get help about:
</span><br>
<span class="quotelev2">&gt; &gt;    find-available:none-found
</span><br>
<span class="quotelev2">&gt; &gt; But I couldn't open the help file:
</span><br>
<span class="quotelev2">&gt; &gt;    ...path/1.4.2/share/openmpi/help-mca-base.txt: Cannot send after
</span><br>
<span class="quotelev2">&gt; &gt; transport endpoint shutdown
</span><br>
<span class="quotelev2">&gt; &gt; .  Sorry!
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
---------------------------------------------------------------------
<br>
<span class="quotelev1">&gt; ---
</span><br>
<span class="quotelev2">&gt; &gt; --
</span><br>
<span class="quotelev2">&gt; &gt; [cn004:00586] PML ob1 cannot be selected
</span><br>
<span class="quotelev3">&gt; &gt;&gt; end quote
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; but there are .so and .la libraries in the directory
</span><br>
<span class="quotelev2">&gt; &gt; ...path/1.4.2/lib/openmpi
</span><br>
<span class="quotelev2">&gt; &gt; Are those the ones not found?
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Thanks
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; Henk
</span><br>
<span class="quotelev2">&gt; &gt;
</span><br>
<span class="quotelev2">&gt; &gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt; &gt; users mailing list
</span><br>
<span class="quotelev2">&gt; &gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt; &gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
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
<li><strong>Next message:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>In reply to:</strong> <a href="16135.php">Reuti: "Re: [OMPI users] orte-odls-default:execv-error"</a>
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
