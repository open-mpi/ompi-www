<?
$subject_val = "Re: [OMPI users] MPI loop problem";
include("../../include/msg-header.inc");
?>
<!-- received="Tue Aug 18 14:38:25 2009" -->
<!-- isoreceived="20090818183825" -->
<!-- sent="Tue, 18 Aug 2009 11:38:54 -0700" -->
<!-- isosent="20090818183854" -->
<!-- name="Eugene Loh" -->
<!-- email="Eugene.Loh_at_[hidden]" -->
<!-- subject="Re: [OMPI users] MPI loop problem" -->
<!-- id="4A8AF53E.1040105_at_sun.com" -->
<!-- charset="US-ASCII" -->
<!-- inreplyto="298232.94738.qm_at_web51311.mail.re2.yahoo.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] MPI loop problem<br>
<strong>From:</strong> Eugene Loh (<em>Eugene.Loh_at_[hidden]</em>)<br>
<strong>Date:</strong> 2009-08-18 14:38:54
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10415.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<head>
  <meta content="text/html;charset=ISO-8859-1" http-equiv="Content-Type">
  <title></title>
</head>
<body bgcolor="#ffffff" text="#000000">
Is the problem independent of the the number of MPI processes?&nbsp; (You
suggest this is the case.)<br>
<br>
If so, does this problem show up even with np=1 (a single MPI process)?<br>
<br>
If so, does the problem show up even if you turn MPI off?<br>
<br>
If so, the problem would seem to be unrelated to the MPI implementation
(but possibly related to code that was introduced to parallelize).<br>
<br>
Julia He wrote:
<blockquote cite="mid298232.94738.qm@web51311.mail.re2.yahoo.com"
 type="cite">
  <table border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">The OpenMPI version is <br>
        <br>
[julia.he@bob bin]$ mpirun --version<br>
mpirun (Open MPI) 1.2.8<br>
        <br>
Report bugs to <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/help/">http://www.open-mpi.org/community/help/</a><br>
        <br>
The platform is <br>
        <br>
[julia.he@bob bin]$ uname -a<br>
Linux bob.csi.cuny.edu 2.6.18-92.1.13.el5 #1 SMP Wed Sep 24 19:32:05
EDT 2008 x86_64 x86_64 x86_64 GNU/Linux<br>
        <br>
The my_sub is a modification of Radiative Transfer code 6S.
<a class="moz-txt-link-freetext" href="http://6s.ltdri.org/">http://6s.ltdri.org/</a> The 6S code takes angles, atmospheric conditions,
altitude, etc as inputs, and it returns top of the atmosphere
reflectance as the output. The code I provided is a pseudo code because
6S code consists of plenty of subroutines and the main program has 3219
lines.<br>
        <br>
What I need is to use MPI to parallel the jobs. So, each computing node
computes one set of the inputs. But I found that the returned value
were not correct after 570 instances. So, I passed the same inputs to
each computing node. But the problem still exist. The first 570
returned values are correct(also same in this case), but after 570 the
returned values are NaN.<br>
        <br>
Can someone give a hint because our system administrator can't help
with programming? But, I suspect if some setting in MPI prevents
computing more than certain times? I know it sounds weird. But I have
no clue why with the same inputs the returned value could be garbage
after 570 instances.<br>
        <blockquote
 style="border-left: 2px solid rgb(16, 16, 255); margin-left: 5px; padding-left: 5px;">On
Tue, Aug 18, 2009 at 8:28 AM, Julia He <span dir="ltr">&lt;<a
 rel="nofollow" ymailto="mailto:springwater4he@yahoo.com"
 target="_blank" href="/mc/compose?to=springwater4he@yahoo.com">springwater4he@yahoo.com</a>&gt;</span>
wrote:<br>
          <div id="yiv45735858">
          <div class="gmail_quote">
          <blockquote class="gmail_quote"
 style="border-left: 1px solid rgb(204, 204, 204); margin: 0pt 0pt 0pt 0.8ex; padding-left: 1ex;">
            <table border="0" cellpadding="0" cellspacing="0">
              <tbody>
                <tr>
                  <td
 style="font-family: inherit; font-style: inherit; font-variant: inherit; font-weight: inherit; font-size: inherit; line-height: inherit; font-size-adjust: inherit; font-stretch: inherit;"
 valign="top">I found that the subroutine call inside a loop did not
return correct value after certain iterations. In order to simplify the
problem, the inputs to the subroutine are chosen to be constant, so the
output should be the same for every iteration on every computing node.
It is a fortran program, after the initialization the program goes like
this:<br>
                  <br>
do i = 1, N<br>
call my_sub(A, B, C, re)<br>
print *, mypn, A, B, C, re<br>
end do<br>
                  <br>
where re is the output value of the my_sub, A, B, C are inputs to
my_sub.<br>
                  <br>
570
is the number of correct iterations. If the combined instances does not
exceed 570, the output is fine. For example, if I requested 10
computing nodes and N were 40, so it gives 10*40=400 instances, the
output would be fine. But if the combined instances exceeded 570, the
first 570 is fine, but the rest will return NaN value. For example, if
the number of computing nodes were 20 and N were 40, which gives
20*40=800 instances, then the first 570 are fine, but the rest are NaN
value.</td>
                </tr>
              </tbody>
            </table>
            <div class="hm"><br>
            </div>
          </blockquote>
          </div>
          </div>
        </blockquote>
        </td>
      </tr>
    </tbody>
  </table>
  <br>
</blockquote>
<br>
</body>

<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="10415.php">Craig Plaisance: "Re: [OMPI users] very bad parallel scaling of vasp using openmpi"</a>
<li><strong>Previous message:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>In reply to:</strong> <a href="10413.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10420.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
<li><strong>Reply:</strong> <a href="10435.php">Julia He: "Re: [OMPI users] MPI loop problem"</a>
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
