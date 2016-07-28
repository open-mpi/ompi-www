<?
$subject_val = "Re: [OMPI users] Help!";
include("../../include/msg-header.inc");
?>
<!-- received="Thu Sep  3 21:17:58 2009" -->
<!-- isoreceived="20090904011758" -->
<!-- sent="Fri, 4 Sep 2009 09:17:53 +0800" -->
<!-- isosent="20090904011753" -->
<!-- name="guosong" -->
<!-- email="guosong1079_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Help!" -->
<!-- id="COL102-W55A265EACB177C2ECDDB6DA8EE0_at_phx.gbl" -->
<!-- charset="gb2312" -->
<!-- inreplyto="4A9FE858.6080007_at_sun.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Help!<br>
<strong>From:</strong> guosong (<em>guosong1079_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-09-03 21:17:53
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
<li><strong>In reply to:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Thanks. I thought those threads will not interfere with each other since they have no common variables except std IO. 
<br>
&nbsp;
<br>
<p><p>Date: Thu, 3 Sep 2009 09:01:28 -0700
<br>
From: Eugene.Loh_at_[hidden]
<br>
To: users_at_[hidden]
<br>
Subject: Re: [OMPI users] Help!
<br>
<p>guosong wrote: 
<br>
<p><p>I am new to open MPI
<br>
I am not, but I'm not real familiar with thread-safe MPI programming.  Still, I saw no other replies to your question, so I'll make an attempt to answer.
<br>
<p>MPI does not guarantee thread safety.  E.g., see <a href="http://www.mpi-forum.org/docs/mpi-20-html/node162.htm#Node162">http://www.mpi-forum.org/docs/mpi-20-html/node162.htm#Node162</a> and the ensuing pages.
<br>
<p>To do what you want to do, you need to make sure you have thread safety.  There is a standard MPI interface for doing so.  I'm not good at C++, so here is a C example:
<br>
<p><p><p>#include &lt;stdio.h&gt;
<br>
#include &lt;mpi.h&gt;
<br>
<p>int main(int argc, char **argv) {
<br>
&nbsp;&nbsp;int provided;
<br>
<p>&nbsp;&nbsp;/* start MPI, asking for support for multiple threads */
<br>
&nbsp;&nbsp;MPI_Init_thread(&amp;argc,&amp;argv,MPI_THREAD_MULTIPLE,&amp;provided);
<br>
<p>&nbsp;&nbsp;/* report what level of support is actually provided */
<br>
&nbsp;&nbsp;if ( MPI_THREAD_SINGLE     == provided ) printf(&quot; MPI_THREAD_SINGLE\n&quot;);
<br>
&nbsp;&nbsp;if ( MPI_THREAD_FUNNELED   == provided ) printf(&quot; MPI_THREAD_FUNNELED\n&quot;);
<br>
&nbsp;&nbsp;if ( MPI_THREAD_SERIALIZED == provided ) printf(&quot; MPI_THREAD_SERIALIZED\n&quot;);
<br>
&nbsp;&nbsp;if ( MPI_THREAD_MULTIPLE   == provided ) printf(&quot; MPI_THREAD_MULTIPLE\n&quot;);
<br>
<p>&nbsp;&nbsp;/* exit */
<br>
&nbsp;&nbsp;MPI_Finalize();
<br>
<p>&nbsp;&nbsp;return 0;
<br>
}
<br>
<p><p><p>Run this program.  If the program does not print out &quot;MPI_THREAD_MULTIPLE&quot;, you're not getting the level of thread support you require and your program is not guaranteed to run properly.  You have to make sure you're using a thread-safe MPI before you can expect your program to work.
<br>
<p>The next question is whether Open MPI is thread safe, and I'll leave you with this:
<br>
<a href="http://www.open-mpi.org/faq/?category=supported-systems#thread-support">http://www.open-mpi.org/faq/?category=supported-systems#thread-support</a>
<br>
<p>Good luck.  Again, I'm not experienced with thread-safe MPI programming (though I understand the general concepts).
<br>
<p>_________________________________________________________________
<br>
MSN&#202;&#174;&#214;&#220;&#196;&#234;&#199;&#236;&#181;&#228;&#163;&#172;&#178;&#233;&#191;&#180;MSN&#215;&#162;&#178;&#225;&#202;&#177;&#188;&#228;&#163;&#172;&#211;&#174;&#200;&#161;&#201;&#241;&#195;&#216;&#180;&#243;&#189;&#177;
<br>
<a href="http://10.msn.com.cn">http://10.msn.com.cn</a>
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-10569/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10570.php">Ben Mayer: "[OMPI users] Problem specifying compiler (pgi)"</a>
<li><strong>Previous message:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
<li><strong>In reply to:</strong> <a href="10568.php">Eugene Loh: "Re: [OMPI users] Help!"</a>
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
