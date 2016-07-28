<?
$subject_val = "Re: [OMPI users] orte-odls-default:execv-error";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Apr  5 07:37:53 2011" -->
<!-- isoreceived="20110405113753" -->
<!-- sent="Tue, 5 Apr 2011 12:37:24 +0100" -->
<!-- isosent="20110405113724" -->
<!-- name="SLIM H.A." -->
<!-- email="h.a.slim_at_[hidden]" -->
<!-- subject="Re: [OMPI users] orte-odls-default:execv-error" -->
<!-- id="5504C1518E7EAE4C912A724C518C079201FACD81_at_DURMAIL1.mds.ad.dur.ac.uk" -->
<!-- charset="us-ascii" -->
<!-- inreplyto="4D9AECF3.3020606_at_oracle.com" -->
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
<strong>Date:</strong> 2011-04-05 07:37:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16136.php">jody: "[OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
&nbsp;
<br>
<p>Hi Terry
<br>
<p>&nbsp;
<br>
<p>I think the problem may have been caused now by our lustre file system
<br>
being sick, so I'll wait until that is fixed. 
<br>
<p>It worked outside gridengine but I think I did not include --mca btl
<br>
self,sm,ib or the corresponding environment variables with gridengine,
<br>
although it usually finds the fastest interconnect.
<br>
<p>&nbsp;
<br>
<p><span class="quotelev1">&gt;I've seen this when either OPAL_PREFIX or LD_LIBRARY_PATH not being set
</span><br>
up correctly.
<br>
<p>&nbsp;
<br>
<p>LD_LIBRARY_PATH is set correctly but where is OPAL_PREFIX set?
<br>
<p>&nbsp;
<br>
<p>Thanks
<br>
<p>&nbsp;
<br>
<p>Henk
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>&nbsp;
<br>
<p>From: users-bounces_at_[hidden] [mailto:users-bounces_at_[hidden]] On
<br>
Behalf Of Terry Dontje
<br>
Sent: 05 April 2011 11:21
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] orte-odls-default:execv-error
<br>
<p>&nbsp;
<br>
<p>On 04/05/2011 05:11 AM, SLIM H.A. wrote: 
<br>
<p>After an upgrade of our system I receive the following error message
<br>
(openmpi 1.4.2 with gridengine):
<br>
&nbsp;
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;quote
<br>
<p>------------------------------------------------------------------------
<br>
<pre>
--
Sorry!  You were supposed to get help about:
    orte-odls-default:execv-error
But I couldn't open the help file:
    ...path/1.4.2/share/openmpi/help-odls-default.txt: Cannot send after
transport endpoint shut
down.  Sorry!
	end quote
 
and this is this is the section in the text file
...path/1.4.2/share/openmpi/help-odls-default.txt that refers to
orte-odls-default:execv-error
 
 
	quote
[orte-odls-default:execv-error]
Could not execute the executable &quot;%s&quot;: %s
 
This could mean that your PATH or executable name is wrong, or that you
do not
have the necessary permissions.  Please ensure that the executable is
able to be
found and executed.&quot;
	end quote
 
Does the execv-error mean that the file
...path/1.4.2/share/openmpi/help-odls-default.txt was not accessible or
is there a different reason?
 
No, it thinks it cannot find some executable that was requested to run.
Do you have the exact mpirun command line that was trying to be ran?
Can you first try and run without gridengine? 
The error message continues with
 
	quote
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
	end quote
 
but there are .so and .la libraries in the directory
...path/1.4.2/lib/openmpi
Are those the ones not found?
I've seen this when either OPAL_PREFIX or LD_LIBRARY_PATH not being set
up correctly.
 
Thanks
 
Henk
 
_______________________________________________
users mailing list
users_at_[hidden]
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
 
-- 
 
Terry D. Dontje | Principal Software Engineer
Developer Tools Engineering | +1.781.442.2631
Oracle - Performance Technologies
95 Network Drive, Burlington, MA 01803
Email terry.dontje_at_[hidden]
 
 
</pre>
<p>
<p>
<br><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-16137/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<hr>
<img src="http://www.open-mpi.org/community/lists/users/att-16137/image001.gif" alt="image001.gif
">
<!-- attachment="image001.gif" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="16138.php">Michael Di Domenico: "Re: [OMPI users] alltoall messages &gt; 2^26"</a>
<li><strong>Previous message:</strong> <a href="16136.php">jody: "[OMPI users] problems with the -xterm option"</a>
<li><strong>In reply to:</strong> <a href="16134.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
<li><strong>Reply:</strong> <a href="16140.php">Terry Dontje: "Re: [OMPI users] orte-odls-default:execv-error"</a>
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
