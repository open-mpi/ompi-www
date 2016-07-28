<?
$subject_val = "[OMPI users] orte-odls-default:execv-error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 05:55:11 2011" -->
<!-- isoreceived="20110405095511" -->
<!-- sent="Tue, 5 Apr 2011 10:11:07 +0100" -->
<!-- isosent="20110405091107" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="[OMPI users] orte-odls-default:execv-error" -->
<!-- id="5504C1518E7EAE4C912A724C518C079201FACD80_at_DURMAIL1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
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
<strong>Subject:</strong> [OMPI users] orte-odls-default:execv-error<br>
<strong>From:</strong> SLIM H.A. (<em>h.a.slim_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-04-05 05:11:07
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16135.php">Reuti: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
After an upgrade of our system I receive the following error message
<br>
(openmpi 1.4.2 with gridengine):
<br>
<p><span class="quotelev1">&gt;quote
</span><br>
------------------------------------------------------------------------
<br>
<pre>
--
Sorry!  You were supposed to get help about:
    orte-odls-default:execv-error
But I couldn't open the help file:
    ...path/1.4.2/share/openmpi/help-odls-default.txt: Cannot send after
transport endpoint shut
down.  Sorry!
&gt;end quote
and this is this is the section in the text file
...path/1.4.2/share/openmpi/help-odls-default.txt that refers to
orte-odls-default:execv-error
&gt;quote
[orte-odls-default:execv-error]
Could not execute the executable &quot;%s&quot;: %s
This could mean that your PATH or executable name is wrong, or that you
do not
have the necessary permissions.  Please ensure that the executable is
able to be
found and executed.&quot;
&gt;end quote
Does the execv-error mean that the file
...path/1.4.2/share/openmpi/help-odls-default.txt was not accessible or
is there a different reason?
The error message continues with
&gt;quote
------------------------------------------------------------------------
--
[cn004:00591] mca: base: component_find: unable to open
...path/1.4.2/lib/openmpi/mca_grpcomm_basic: file not found (ignored)
[cn004:00586] mca: base: component_find: unable to open 
...path/1.4.2/lib/openmpi/mca_notifier_syslog: file not found (ignored)
[cn004:00585] mca: base: component_find: unable to open 
...path/1.4.2/lib/openmpi/mca_notifier_syslog: file not found (ignored)
------------------------------------------------------------------------
--
Sorry!  You were supposed to get help about:
    find-available:none-found
But I couldn't open the help file:
    ...path/1.4.2/share/openmpi/help-mca-base.txt: Cannot send after
transport endpoint shutdown
.  Sorry!
------------------------------------------------------------------------
--
[cn004:00586] PML ob1 cannot be selected
&gt;end quote
but there are .so and .la libraries in the directory
...path/1.4.2/lib/openmpi
Are those the ones not found?
Thanks
Henk
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Previous message:</strong> <a href="16132.php">Ralph Castain: "Re: [OMPI users] WRF run on multiple Nodes"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16135.php">Reuti: "Re: [OMPI users] orte-odls-default:execv-error"</a>
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
