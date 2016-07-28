<?
$subject_val = "[OMPI users] Problems with MPI_Init_Thread(...)";
include("../../include/msg-header.inc");
?>
<!-- received="Mon Sep 19 04:15:48 2011" -->
<!-- isoreceived="20110919081548" -->
<!-- sent="Mon, 19 Sep 2011 09:15:42 +0100 (BST)" -->
<!-- isosent="20110919081542" -->
<!-- name="devendra rai" -->
<!-- email="rai.devendra_at_[hidden]" -->
<!-- subject="[OMPI users] Problems with MPI_Init_Thread(...)" -->
<!-- id="1316420142.16387.YahooMailNeo_at_web29616.mail.ird.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="CAFB055D-790A-40DB-AD9A-321372CB5A26_at_staff.uni-marburg.de" -->
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
<strong>Subject:</strong> [OMPI users] Problems with MPI_Init_Thread(...)<br>
<strong>From:</strong> devendra rai (<em>rai.devendra_at_[hidden]</em>)<br>
<strong>Date:</strong> 2011-09-19 04:15:42
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17326.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17303.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17334.php">Sébastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Reply:</strong> <a href="17334.php">Sébastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hello Community,

I am building an application which uses MPI_Ssend(...) and MPI_Recv(...) 
in threads. So, there is more than one thread which invokes MPI 
functions. 


Based on Jeff's inputs, I rebuilt open-mpi with threads support:

./configure --enable-mpi-threads=yes --with-threads=posix ...

I believe the above line would do the magic.

Now, I learnt that I need to request thread support when initializing MPI 
application using MPI_Init_thread(...). This is my code fragment:

int main(int argc, char *argv[])
{
&#160;&#160;&#160;&#160;&#160;&#160;&#160; int rank;
&#160;&#160;&#160;&#160;&#160;&#160;&#160; int desired_thread_support = MPI_THREAD_MULTIPLE;
&#160;&#160;&#160;&#160;&#160;&#160;&#160; int provided_thread_support;
&#160;&#160;&#160; 
&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_Init_thread(&amp;argc, &amp;argv, desired_thread_support, &amp;provided_thread_support);
&#160;&#160; 
&#160;&#160;&#160;&#160;&#160;&#160;&#160; MPI_Comm_set_errhandler(MPI_COMM_WORLD, MPI_ERRORS_RETURN);


I build my application, and run it on 3 nodes. However, I get this error:

Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** The MPI_Init_thread() function was called before MPI_INIT was invoked.
Sun Sep 18 22:25:11 2011[1,1]&lt;stderr&gt;:*** This is disallowed by the MPI standard.
Sun Sep 18 22:25:11
 2011[1,1]&lt;stderr&gt;:*** Your MPI job will now abort.
Sun Sep 18 
22:25:11 2011[1,1]&lt;stderr&gt;:[Morpheus.OTZ:9910] Abort before 
MPI_INIT completed successfully; not able to guarantee that all other 
processes were killed!

I did read some online examples, and API documentations, and nothing says that I will need to call MPI_Init(...) *followed by* 
MPI_Init_thread(...).

I have open-mpi 1.4.3 from open-mpi official site, running on Linux kernel 2.6.37.6-0.7.


I do not understand why this error is happening.

Again, the next question is, Am I required to MPI_Init_thread everytime I 
create a new thread? If yes, will this call be the first line in the 
thread?


Would be nice if someone can throw some pointers.

Thanks a lot.

Best,
Devendra Rai


________________________________
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-17327/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="17328.php">Ole Nielsen: "Re: [OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>Previous message:</strong> <a href="17326.php">Ole Nielsen: "[OMPI users] MPI hangs on multiple nodes"</a>
<li><strong>In reply to:</strong> <a href="17303.php">Reuti: "Re: [OMPI users] EXTERNAL: Re: Can you set the gid of the processes	created by mpirun?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="17334.php">Sébastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
<li><strong>Reply:</strong> <a href="17334.php">Sébastien Boisvert: "[OMPI users] RE :  Problems with MPI_Init_Thread(...)"</a>
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
