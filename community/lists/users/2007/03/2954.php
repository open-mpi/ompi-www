<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Mar 30 14:07:09 2007" -->
<!-- isoreceived="20070330180709" -->
<!-- sent="Fri, 30 Mar 2007 14:06:31 -0400" -->
<!-- isosent="20070330180631" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Getting a core-dump with OpenMPI" -->
<!-- id="DB979B60-952D-42CD-B661-7F835D54E2C2_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="696fd4820703300911gf28824fl2fbd5f16d1c3a951_at_mail.gmail.com" -->
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
<strong>From:</strong> Jeff Squyres (<em>jsquyres_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-03-30 14:06:31
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI users] Newbie Hostfile Quesiton"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Jeff Stuart: "[OMPI users] Getting a core-dump with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
You should be able to get a core dump pretty easily by doing  
<br>
something like this:
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{ char *foo = 0; *foo = 13; }
<br>
<p>Ensure that your coredumpsize limit is set to &quot;unlimited&quot; in the  
<br>
shell on all nodes where you are running your MPI processes.  It's  
<br>
also helpful to set Linux (I'm assuming you're using Linux...?) to  
<br>
append the core filename with the PID of the process that created it  
<br>
so that you don't have multiple processes all writing to a single  
<br>
file named &quot;core&quot; (particularly in a network filesystem kind of  
<br>
scenario) because you'll get a single file that may or may not be  
<br>
usable.
<br>
<p><p>On Mar 30, 2007, at 12:11 PM, Jeff Stuart wrote:
<br>
<p><span class="quotelev1">&gt; I'm using OpenMPI, and the documentation says that only a totalview
</span><br>
<span class="quotelev1">&gt; style of debugger can be used. With that in mind, all I want to do is
</span><br>
<span class="quotelev1">&gt; get a core-dump when a process crashes. I can then just load the core
</span><br>
<span class="quotelev1">&gt; into GDB. Is there any easy way to do this?
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; I tried calling signal(SIGSEGV, SIG_DFL); signal(SIGABRT, SIG_DFL); to
</span><br>
<span class="quotelev1">&gt; no avail. All that happens is that I don't get a call stack dump
</span><br>
<span class="quotelev1">&gt; anymore.
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; Thanks,
</span><br>
<span class="quotelev1">&gt; -Jeff
</span><br>
<span class="quotelev1">&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt; users mailing list
</span><br>
<span class="quotelev1">&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<p><p><pre>
-- 
Jeff Squyres
Cisco Systems
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
<li><strong>Previous message:</strong> <a href="2953.php">Jeff Squyres: "Re: [OMPI users] Newbie Hostfile Quesiton"</a>
<li><strong>In reply to:</strong> <a href="2951.php">Jeff Stuart: "[OMPI users] Getting a core-dump with OpenMPI"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="2955.php">George Bosilca: "Re: [OMPI users] Getting a core-dump with OpenMPI"</a>
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
