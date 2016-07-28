<?
$subject_val = "Re: [OMPI users] Segmentation fault - Address not mapped";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Jul  6 09:24:48 2009" -->
<!-- isoreceived="20090706132448" -->
<!-- sent="Mon, 6 Jul 2009 14:24:24 +0100" -->
<!-- isosent="20090706132424" -->
<!-- name="Catalin David" -->
<!-- email="catalindavid2003_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Segmentation fault - Address not mapped" -->
<!-- id="d62c43c00907060624p3dfe92d8v75271ec0c4890ae8_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
<!-- inreplyto="4A51F89A.2070409_at_web.de" -->
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
<strong>Subject:</strong> Re: [OMPI users] Segmentation fault - Address not mapped<br>
<strong>From:</strong> Catalin David (<em>catalindavid2003_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-07-06 09:24:24
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
On Mon, Jul 6, 2009 at 2:14 PM, Dorian Krause&lt;doriankrause_at_[hidden]&gt; wrote:
<br>
<span class="quotelev1">&gt; Hi,
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; //Initialize step
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Init(&amp;argc,&amp;argv);
</span><br>
<span class="quotelev2">&gt;&gt; //Here it breaks!!! Memory allocation issue!
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_size(MPI_COMM_WORLD, &amp;pool);
</span><br>
<span class="quotelev2">&gt;&gt; std::cout&lt;&lt;&quot;I'm here&quot;&lt;&lt;std::endl; //this statement is never reached
</span><br>
<span class="quotelev2">&gt;&gt; MPI_Comm_rank(MPI_COMM_WORLD, &amp;myid);
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; When trying to debug via gdb, the problem seems to be:
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; Program received signal SIGSEGV, Segmentation fault.
</span><br>
<span class="quotelev2">&gt;&gt; 0xb7524772 in ompi_comm_invalid (comm=Could not find the frame base
</span><br>
<span class="quotelev2">&gt;&gt; for &quot;ompi_comm_invalid&quot;.) at communicator.h:261
</span><br>
<span class="quotelev2">&gt;&gt; 261 &#160; &#160; communicator.h: No such file or directory.
</span><br>
<span class="quotelev2">&gt;&gt; &#160; &#160; &#160; &#160;in communicator.h
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev2">&gt;&gt; which might indicate a problem with paths. For now, my LD_LIBRARY_PATH
</span><br>
<span class="quotelev2">&gt;&gt; is set to &quot;/users/cluster/cdavid/local/lib/&quot; (the local folder in my
</span><br>
<span class="quotelev2">&gt;&gt; home folder emulates the directory structure of the / folder).
</span><br>
<span class="quotelev2">&gt;&gt;
</span><br>
<span class="quotelev1">&gt;
</span><br>
<span class="quotelev1">&gt; and your PATH is also okay? (I see that you use plain mpicxx in the build)
</span><br>
<span class="quotelev1">&gt; ...
</span><br>
<span class="quotelev1">&gt;
</span><br>
<p>Hi again!
<br>
<p>This is the output of some commands in the terminal:
<br>
<p>cdavid_at_denali:~$ which mpicxx
<br>
~/local/bin/mpicxx
<br>
cdavid_at_denali:~$ echo $PATH
<br>
/users/cluster/cdavid/local/bin:/usr/kerberos/bin:/usr/local/bin:/bin:/usr/bin:/usr/X11R6/bin:/opt/scali/bin:/opt/scali/sbin:/opt/scali/contrib/pbs/bin:/users/cluster/cdavid/bin
<br>
cdavid_at_denali:~$ echo $LD_LIBRARY_PATH
<br>
/users/cluster/cdavid/local/lib/
<br>
cdavid_at_denali:~$ locate communicator.h
<br>
cdavid_at_denali:~$
<br>
<p>I don't see anything wrong with the path (I added the first part in
<br>
order to make it look there first). I even tried adding
<br>
&quot;-L/users/cluster/cdavid/local/lib -lmpi
<br>
-I/users/cluster/cdavid/local/include&quot; to the compiler invocation, in
<br>
hope of an improvement. So far, nothing.
<br>
<p>Regards,
<br>
<p>Catalin
<br>
<p><p><pre>
-- 
******************************
Catalin David
B.Sc. Computer Science 2010
Jacobs University Bremen
Phone: +49-(0)1577-49-38-667
College Ring 4, #343
Bremen, 28759
Germany
******************************
</pre>
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Previous message:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>In reply to:</strong> <a href="9837.php">Dorian Krause: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
<li><strong>Reply:</strong> <a href="9839.php">jody: "Re: [OMPI users] Segmentation fault - Address not mapped"</a>
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
