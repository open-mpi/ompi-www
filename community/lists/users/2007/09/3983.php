<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Sep  7 23:53:17 2007" -->
<!-- isoreceived="20070908035317" -->
<!-- sent="Fri, 7 Sep 2007 23:53:11 -0400" -->
<!-- isosent="20070908035311" -->
<!-- name="Ashley Dowling" -->
<!-- email="ashley.dowling_at_[hidden]" -->
<!-- subject="[OMPI users] parallel processing on two quad core macs...help please!" -->
<!-- id="d4c979af0709072053h5503b217odeb51d3c0314f452_at_mail.gmail.com" -->
<!-- charset="ISO-8859-1" -->
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
<strong>From:</strong> Ashley Dowling (<em>ashley.dowling_at_[hidden]</em>)<br>
<strong>Date:</strong> 2007-09-07 23:53:11
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3984.php">Paul Cochrane: "Re: [OMPI users] parallel processing on two quad core macs...help please!"</a>
<li><strong>Previous message:</strong> <a href="3982.php">Richard Friedman: "[OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3984.php">Paul Cochrane: "Re: [OMPI users] parallel processing on two quad core macs...help please!"</a>
<li><strong>Reply:</strong> <a href="3984.php">Paul Cochrane: "Re: [OMPI users] parallel processing on two quad core macs...help please!"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi all
<br>
<p>I am very much a novice at all this so please forgive my ignorance. I am
<br>
trying to set up a piece of analytical software for parallel processing of
<br>
my datasets on two quad core Mac Pros. I have managed to install OpenMPI on
<br>
the Macs, compile the software, and get it to run in parallel across the
<br>
four nodes within each Mac. My sticking point now is how to get it to run on
<br>
all eight nodes (two Macs) in parallel. The instructions on the webpage for
<br>
the software use Lam and are as follows:
<br>
<p>*Running MrBayes*
<br>
<p>First we have to start the 'lam' by creating a text file called lamhost. If
<br>
you are using one quad G5 machine, you need only one line &quot;localhost cpu=4&quot;,
<br>
e.g. by typing in the terminal window
<br>
<p>&nbsp;echo &quot;localhost cpu=4&quot; &gt; lamhosts
<br>
<p>When you have multiple machines, you need a line for every machine in the
<br>
lamhost file and the full machine name instead of localhost. The file might
<br>
look like
<br>
<p>&nbsp;$ cat lamhosts
<br>
<p>&nbsp;mac01 cpu=4
<br>
<p>&nbsp;mac02 cpu=4
<br>
<p>&nbsp;mac03 cpu=4
<br>
<p>To start the lam you can type
<br>
<p>&nbsp;lamboot lamhosts
<br>
<p>from a terminal window.
<br>
<p>To run mrbayes on *N* processors, you use
<br>
<p>&nbsp;mpirun -np N ./mb
<br>
<p>N is typically four times the number of machines you are using.
<br>
<p>To stop the lam type
<br>
<p>&nbsp;wipe lamhosts
<br>
<p>in a terminal window.
<br>
<p>Retrieved from &quot;<a href="http://mrbayes.csit.fsu.edu/wiki/index.php/FAQ_3.2<https://exchange.uky.edu/owa/redir.aspx?URL=http%3a%2f%2fmrbayes.csit.fsu.edu%2fwiki%2findex.php%2fFAQ_3.2">http://mrbayes.csit.fsu.edu/wiki/index.php/FAQ_3.2<https://exchange.uky.edu/owa/redir.aspx?URL=http%3a%2f%2fmrbayes.csit.fsu.edu%2fwiki%2findex.php%2fFAQ_3.2</a>&gt;
<br>
&quot;
<br>
<p><p><p>Obviously this doesn't work on MPI since there is no lamboot. Is there an
<br>
equivalent command to use? Or better yet, how do I go about getting these
<br>
two machines to communicate in parallel? I have scoured the web looking for
<br>
advice on this, but as I mentioned, I am new at this and I think some of the
<br>
things I have found are just way over my head right now and have hit the
<br>
point where I am giving up and asking for help. Any info/instructions/advice
<br>
(written in terms I can understand) would be greatly appreciated.
<br>
<p>Thanks much
<br>
<p>Ashley
<br>
<p><hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-3983/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="3984.php">Paul Cochrane: "Re: [OMPI users] parallel processing on two quad core macs...help please!"</a>
<li><strong>Previous message:</strong> <a href="3982.php">Richard Friedman: "[OMPI users] OpenMPI Documentation?"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="3984.php">Paul Cochrane: "Re: [OMPI users] parallel processing on two quad core macs...help please!"</a>
<li><strong>Reply:</strong> <a href="3984.php">Paul Cochrane: "Re: [OMPI users] parallel processing on two quad core macs...help please!"</a>
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
