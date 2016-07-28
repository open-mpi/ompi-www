<?
$subject_val = "Re: [OMPI users] Help passing filename arguments with spaces	through mpirun on windows";
include("../../include/msg-header.inc");
?>
<!-- received="Wed Oct 27 11:15:44 2010" -->
<!-- isoreceived="20101027151544" -->
<!-- sent="Wed, 27 Oct 2010 17:17:27 +0200" -->
<!-- isosent="20101027151727" -->
<!-- name="Shiqing Fan" -->
<!-- email="fan_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help passing filename arguments with spaces	through mpirun on windows" -->
<!-- id="4CC84287.8040407_at_hlrs.de" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="60FBDF9E-6219-4970-8F2D-F0F0692C6E9A_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help passing filename arguments with spaces	through mpirun on windows<br>
<strong>From:</strong> Shiqing Fan (<em>fan_at_[hidden]</em>)<br>
<strong>Date:</strong> 2010-10-27 11:17:27
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14636.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>In reply to:</strong> <a href="14622.php">Reuti: "Re: [OMPI users] Help passing filename arguments with spaces through mpirun on windows"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi,
<br>
<p>You might also want to try &quot;C:\\Program Files\\some dir&quot;.
<br>
<p><p>Shiqing
<br>
<p><p>On 2010-10-26 4:54 PM, Reuti wrote:
<br>
<span class="quotelev1">&gt; Am 26.10.2010 um 16:48 schrieb Bill McGrory:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I'm trying to pass a full path name as an argument to my executable
</span><br>
<span class="quotelev2">&gt;&gt; through mpirun on a windows platform. Some of the directories have
</span><br>
<span class="quotelev2">&gt;&gt; spaces embedded in the file name (e.g. C:\Program Files)
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When I print out the argument list from the program, it has split the
</span><br>
<span class="quotelev2">&gt;&gt; argument into two (or more).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; I have also enclosed the arguments in quotes, but that doesn't seem to
</span><br>
<span class="quotelev2">&gt;&gt; help.
</span><br>
<span class="quotelev1">&gt; I don't know for Windows, but sometimes it can help to use single and double quotes in combination:
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; '&quot;C:\Program Files&quot;'
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- Reuti
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Is this a bug? or do I need to escape my argument list some way.
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; TIA
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Bill
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This is v1.4.2 compiled with MSVS using MS compilers, and I see it on XP
</span><br>
<span class="quotelev2">&gt;&gt; and Vista.
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
<span class="quotelev1">&gt;
</span><br>
<p><p><pre>
-- 
--------------------------------------------------------------
Shiqing Fan                          <a href="http://www.hlrs.de/people/fan">http://www.hlrs.de/people/fan</a>
High Performance Computing           Tel.: +49 711 685 87234
   Center Stuttgart (HLRS)            Fax.: +49 711 685 65832
Address:Allmandring 30               email: fan_at_[hidden]
70569 Stuttgart
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="14636.php">Jack Bryan: "Re: [OMPI users] Open MPI program cannot complete"</a>
<li><strong>Previous message:</strong> <a href="14634.php">jody: "Re: [OMPI users] Using hostfile with default hostfile"</a>
<li><strong>In reply to:</strong> <a href="14622.php">Reuti: "Re: [OMPI users] Help passing filename arguments with spaces through mpirun on windows"</a>
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
