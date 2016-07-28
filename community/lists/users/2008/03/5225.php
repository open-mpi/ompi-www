<?
$subject_val = "Re: [OMPI users] SIGSEGV error.";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Mar 18 07:21:30 2008" -->
<!-- isoreceived="20080318112130" -->
<!-- sent="Tue, 18 Mar 2008 08:21:21 -0300 (ART)" -->
<!-- isosent="20080318112121" -->
<!-- name="Giovani Faccin" -->
<!-- email="giovanifaccin_at_[hidden]" -->
<!-- subject="Re: [OMPI users] SIGSEGV error." -->
<!-- id="285891.27867.qm_at_web33106.mail.mud.yahoo.com" -->
<!-- charset="iso-8859-1" -->
<!-- inreplyto="20080318021651.28249.qmail_at_f4mail-235-135.rediffmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] SIGSEGV error.<br>
<strong>From:</strong> Giovani Faccin (<em>giovanifaccin_at_[hidden]</em>)<br>
<strong>Date:</strong> 2008-03-18 07:21:21
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>In reply to:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hey Balaji
<br>
<p>I'm new at it too, but might be able to help you a bit.
<br>
<p>A sigsegv error occurs usually when you try to access something in memory that's not actually there. Like using a pointer that points to nothing. In my short experience with MPI so far, I got this kind of message when I made something wrong with the functions, like for example sending a buffer and, when telling MPI it's size, giving a wrong value. Make sure there's nothing like that on your code.
<br>
<p>For the time thing, I think that what you want is the MPI_WTime() function. Check this out:
<br>
<a href="https://computing.llnl.gov/tutorials/mpi/man/MPI_Wtime.txt">https://computing.llnl.gov/tutorials/mpi/man/MPI_Wtime.txt</a>
<br>
<p>Best, 
<br>
<p>Giovani
<br>
<p>balaji srinivas &lt;balajisrinivas86_at_[hidden]&gt; escreveu:    
<br>
&nbsp;hi all,
<br>
&nbsp;&nbsp;I am new to MPI. The outline of my code is
<br>
&nbsp;
<br>
&nbsp;if(r==0)
<br>
&nbsp;function1()
<br>
&nbsp;else if(r==1)
<br>
&nbsp;function2()
<br>
&nbsp;
<br>
&nbsp;where r is the rank and functions are included in the .h files. There are no compilation errors. I get the SIGSEGV error while running.
<br>
&nbsp;Pls help. how to solve this?
<br>
&nbsp;
<br>
&nbsp;2) how to find the execution time of a mpi program. in C we have
<br>
&nbsp;clock_t start=clock() at the beginning and
<br>
&nbsp;
<br>
&nbsp;((double)clock() - start) / CLOCKS_PER_SEC) at the end.
<br>
&nbsp;
<br>
&nbsp;Thanks in advance.
<br>
&nbsp;
<br>
&nbsp;regards,
<br>
&nbsp;balaji. 
<br>
&nbsp;
<br>
<p>&nbsp;_______________________________________________
<br>
users mailing list
<br>
users_at_[hidden]
<br>
<a href="http://www.open-mpi.org/mailman/listinfo.cgi/users">http://www.open-mpi.org/mailman/listinfo.cgi/users</a>
<br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<br>
---------------------------------
<br>
Abra sua conta no Yahoo! Mail, o &#250;nico sem limite de espa&#231;o para armazenamento! 
<br>
<hr>
<ul>
<li>text/html attachment: <a href="http://www.open-mpi.org/community/lists/users/att-5225/attachment">attachment</a>
</ul>
<!-- attachment="attachment" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="5226.php">Jeff Squyres: "Re: [OMPI users] Begginers question: why does this program hangs?"</a>
<li><strong>Previous message:</strong> <a href="5224.php">Jeff Squyres: "Re: [OMPI users] SIGSEGV error."</a>
<li><strong>In reply to:</strong> <a href="5221.php">balaji srinivas: "[OMPI users] SIGSEGV error."</a>
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
