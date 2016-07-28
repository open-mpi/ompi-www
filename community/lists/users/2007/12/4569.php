<?
$subject_val = "Re: [OMPI users] Newbie: Using hostfile";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Dec  1 06:40:42 2007" -->
<!-- isoreceived="20071201114042" -->
<!-- sent="Sat, 1 Dec 2007 06:40:36 -0500" -->
<!-- isosent="20071201114036" -->
<!-- name="Jeff Squyres" -->
<!-- email="jsquyres_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Newbie: Using hostfile" -->
<!-- id="0AABCF5C-688B-4984-A219-00BF5D2C7CDC_at_cisco.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="ec5d15220711292101w4e68f542md6bda7fd62771dc5_at_mail.gmail.com" -->
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
<strong>Date:</strong> 2007-12-01 06:40:36
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="4570.php">Prakash Velayutham: "[OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4568.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>In reply to:</strong> <a href="../../2007/11/4565.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
FWIW, orterun is exactly the same as mpirun (one is a sym link to the  
<br>
other).
<br>
<p>This smacks of having a mismatch of Open MPI versions on different  
<br>
nodes.
<br>
<p>Can you verify that default version of Open MPI that is being found on  
<br>
all your nodes is the same?
<br>
<p><p>On Nov 30, 2007, at 12:01 AM, Madireddy Samuel Vijaykumar wrote:
<br>
<p><span class="quotelev1">&gt; Our application looks like it does not use mpirun at all. But we have
</span><br>
<span class="quotelev1">&gt; &quot;orterun&quot; so i just tested it by run
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; orterun --hostfile &lt;hostfile&gt; hostname and it prints out this ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file dss/dss_unpack.c at line 90
</span><br>
<span class="quotelev1">&gt; [lynx:21319] [0,0,0] ORTE_ERROR_LOG: Data unpack had inadequate space
</span><br>
<span class="quotelev1">&gt; in file gpr_replica_cmd_processor.c at line 361
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and  it just stay/hangs there :(
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; On Nov 29, 2007 6:07 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev2">&gt;&gt; On Nov 29, 2007, at 2:09 AM, Madireddy Samuel Vijaykumar wrote:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; A non MPI application does run without any issues. Could eloberate  
</span><br>
<span class="quotelev3">&gt;&gt;&gt; on
</span><br>
<span class="quotelev3">&gt;&gt;&gt; what you mean by doing mpirun &quot;hostname&quot;. You mean i just do an
</span><br>
<span class="quotelev3">&gt;&gt;&gt; 'mpirun lynx' in my case???
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; No, I mean
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;    mpirun --hostfile &lt;your_hostfile&gt; hostname
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; This should run the &quot;hostname&quot; command on each of your nodes.  If
</span><br>
<span class="quotelev2">&gt;&gt; running &quot;hostname&quot; doesn't work after changing the order, then
</span><br>
<span class="quotelev2">&gt;&gt; something is very wrong.  If it *does* work, it implies something  
</span><br>
<span class="quotelev2">&gt;&gt; that
</span><br>
<span class="quotelev2">&gt;&gt; there is faulty in the MPI startup (which is more complicated than
</span><br>
<span class="quotelev2">&gt;&gt; starting up non-MPI applications).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; On Nov 28, 2007 9:57 PM, Jeff Squyres &lt;jsquyres_at_[hidden]&gt; wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Well, that's odd.
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; What happens if you try to mpirun &quot;hostname&quot; (i.e., a non-MPI
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; application)?  Does it run, or does it hang?
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; On Nov 23, 2007, at 6:00 AM, Madireddy Samuel Vijaykumar wrote:
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; I have been using using clusters for some tests. My localhost  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; &quot;lynx&quot;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; and i have &quot;puma&quot; and &quot;tiger&quot; which make up the cluster. All have
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; passwordless ssh enabled. Now if i have the following in my
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; hostfile(perline in the same order)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lynx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; puma
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tiger
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My tests(from lynx) run over the cluster without any issues.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; But if move/remove the lynx from there either (perline in the same
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; order)
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; puma
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; lynx
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tiger
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; or
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; puma
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; tiger
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; My test(from lynx) just does not get any where. It just hangs. And
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; does not proceed at all. Is this an issue with way my script  
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; handles
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; the cluster node. Or is there an method for the hostfile. Thanks.
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Sam aka Vijju
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; :)~
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; Linux: Open, True and Cool
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev1">&gt;&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; --
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev4">&gt;&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt;
</span><br>
<span class="quotelev3">&gt;&gt;&gt; --
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Sam aka Vijju
</span><br>
<span class="quotelev3">&gt;&gt;&gt; :)~
</span><br>
<span class="quotelev3">&gt;&gt;&gt; Linux: Open, True and Cool
</span><br>
<span class="quotelev3">&gt;&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users mailing list
</span><br>
<span class="quotelev3">&gt;&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev3">&gt;&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; --
</span><br>
<span class="quotelev2">&gt;&gt; Jeff Squyres
</span><br>
<span class="quotelev2">&gt;&gt; Cisco Systems
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; _______________________________________________
</span><br>
<span class="quotelev2">&gt;&gt; users mailing list
</span><br>
<span class="quotelev2">&gt;&gt; users_at_[hidden]
</span><br>
<span class="quotelev2">&gt;&gt; <a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; -- 
</span><br>
<span class="quotelev1">&gt; Sam aka Vijju
</span><br>
<span class="quotelev1">&gt; :)~
</span><br>
<span class="quotelev1">&gt; Linux: Open, True and Cool
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
<li><strong>Next message:</strong> <a href="4570.php">Prakash Velayutham: "[OMPI users] Simple MPI_Comm_spawn program hangs"</a>
<li><strong>Previous message:</strong> <a href="4568.php">George Bosilca: "Re: [OMPI users] Shared memory communication limits parallelism?"</a>
<li><strong>In reply to:</strong> <a href="../../2007/11/4565.php">Madireddy Samuel Vijaykumar: "Re: [OMPI users] Newbie: Using hostfile"</a>
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
