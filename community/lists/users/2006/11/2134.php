<? include("../../include/msg-header.inc"); ?>
<!-- received="Fri Nov  3 15:48:44 2006" -->
<!-- isoreceived="20061103204844" -->
<!-- sent="Fri, 3 Nov 2006 12:48:35 -0800 (PST)" -->
<!-- isosent="20061103204835" -->
<!-- name="Jose Quiroga" -->
<!-- email="joseluisquiroga_at_[hidden]" -->
<!-- subject="[OMPI users] Suspected bug during MPI_Barrier." -->
<!-- id="20061103204835.82997.qmail_at_web50113.mail.yahoo.com" -->
<!-- charset="iso-8859-1" -->
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
<strong>From:</strong> Jose Quiroga (<em>joseluisquiroga_at_[hidden]</em>)<br>
<strong>Date:</strong> 2006-11-03 15:48:35
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
<!-- nextthread="start" -->
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<p>
Hi OpenMPI people,
<br>
<p>In the attached file is all the info (as simple as I
<br>
could reproduce it) of what I think is a bug.
<br>
<p>The basic idea is that in a sigle processor debian
<br>
machine, only TCP messaging, 1.1.2 and previous abort
<br>
in the sample program during MPI_Barrier when run with
<br>
<p>three processes (more fail too but unpredictable).
<br>
<p>My best guess is that PtoP messaging is interfering
<br>
with collective messaging.
<br>
<p>Thanks for OpenMPI !
<br>
<p>JLQ.
<br>
<p><p><p><p>&nbsp;
<br>
____________________________________________________________________________________
<br>
Want to start your own business? Learn how on Yahoo! Small Business 
<br>
(<a href="http://smallbusiness.yahoo.com">http://smallbusiness.yahoo.com</a>) 
<br>
<p>*****************************************************************************
<br>
**                                                                         **
<br>
** WARNING:  This email contains an attachment of a very suspicious type.  **
<br>
** You are urged NOT to open this attachment unless you are absolutely     **
<br>
** sure it is legitimate.  Opening this attachment may cause irreparable    **
<br>
** damage to your computer and your files.  If you have any questions      **
<br>
** about the validity of this message, PLEASE SEEK HELP BEFORE OPENING IT. **
<br>
**                                                                         **
<br>
** This warning was added by the IU Computer Science Dept. mail scanner.   **
<br>
*****************************************************************************
<br>
<p><p>
<br><hr>
<ul>
<li>application/x-zip-compressed attachment: <a href="http://www.open-mpi.org/community/lists/users/att-2134/bug_barrier.zip">1848202954-bug_barrier.zip</a>
</ul>
<!-- attachment="bug_barrier.zip" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="2135.php">Ralph H Castain: "Re: [OMPI users] MPI_Comm_spawn multiple bproc support"</a>
<li><strong>Previous message:</strong> <a href="2133.php">George Bosilca: "Re: [OMPI users] OMPI collectives"</a>
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
