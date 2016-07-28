<?
$subject_val = "Re: [OMPI users] Docker Cluster Queue Manager";
include("../../include/msg-header.inc");
?>
<!-- received="Sat Jun  4 18:07:00 2016" -->
<!-- isoreceived="20160604220700" -->
<!-- sent="Sun, 5 Jun 2016 01:06:55 +0300" -->
<!-- isosent="20160604220655" -->
<!-- name="dani" -->
<!-- email="dani_at_[hidden]" -->
<!-- subject="Re: [OMPI users] Docker Cluster Queue Manager" -->
<!-- id="4963b0a2-d1b3-9eb8-3090-5b683af80c1b_at_letai.org.il" -->
<!-- charset="windows-1252" -->
<!-- inreplyto="CAJB=V02AKEVLYCXZ_+s5F2Aa+-GpyEchTetdwWnHOjWYNa-Gfw_at_mail.gmail.com" -->
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
<strong>Subject:</strong> Re: [OMPI users] Docker Cluster Queue Manager<br>
<strong>From:</strong> dani (<em>dani_at_[hidden]</em>)<br>
<strong>Date:</strong> 2016-06-04 18:06:55
</p>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- reply="end" -->
</ul>
<hr>
<!-- body="start" -->

  <head>
    <meta content="text/html; charset=windows-1252"
      http-equiv="Content-Type">
  </head>
  <body bgcolor="#FFFFFF" text="#000000">
    <p>For provisioning, I personally use xCAT, which just started
      supporting docker
<a class="moz-txt-link-freetext" href="http://xcat-docs.readthedocs.io/en/stable/advanced/docker/lifecycle_management.html">http://xcat-docs.readthedocs.io/en/stable/advanced/docker/lifecycle_management.html</a></p>
    <p>Together with slurm elastic computing feature
<a class="moz-txt-link-freetext" href="http://xcat-docs.readthedocs.io/en/stable/advanced/docker/lifecycle_management.html">http://xcat-docs.readthedocs.io/en/stable/advanced/docker/lifecycle_management.html</a>
      this could be a poor man's solution.</p>
    <p>I'm not sure how convenient xCAT would be to maintain non-unix
      ids. Frankly, I'm still not sure of your requirements in that
      regard.<br>
    </p>
    <p><br>
    </p>
    <br>
    <div class="moz-cite-prefix">On 04/06//2016 16:01, Rob Nagler wrote:<br>
    </div>
    <blockquote
cite="mid:CAJB=V02AKEVLYCXZ_+s5F2Aa+-GpyEchTetdwWnHOjWYNa-Gfw@mail.gmail.com"
      type="cite">
      <div dir="ltr">
        <div class="gmail_extra">Hi Daniel,</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Thanks. </div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Shifter is also interesting. However,
          it assumes our users map to a Unix user id, and therefore the
          access to the shared file system can be controlled by normal
          Unix permissions. That's not scalable, and makes for quite a
          bit of complexity. Each node must know about each user so you
          have to run LDAP or something similar. This adds complexity to
          dynamic cluster creation.</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Shifter runs in a chroot, not an
          cgroup, context. For a supercomputer center with an
          application process to get an account, this works fine. For a
          web application with no "background check", it's more risky.
          At NERSC, you don't have the bad actor problem. Web apps do,
          and all it takes is one local exploit to escape chroot.
          Docker/cgroups is safer, and the focus on improving Linux
          security is on cgroups these days, not chroot "jails".</div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Shifter also does not solve the problem
          of queuing dynamic clusters. SLURM/Torque, which Shifter
          relies on, does not either. This is probably the most
          difficult item. StarCluster does solve this problem, but
          doesn't work on bare metal, and it's not clear if it is being
          maintained any more. </div>
        <div class="gmail_extra"><br>
        </div>
        <div class="gmail_extra">Rob<br>
        </div>
        <div class="gmail_extra"><br>
        </div>
      </div>
      <br>
      <fieldset class="mimeAttachmentHeader"></fieldset>
      <br>
      <pre wrap="">_______________________________________________
users mailing list
<a class="moz-txt-link-abbreviated" href="mailto:users@open-mpi.org">users@open-mpi.org</a>
Subscription: <a class="moz-txt-link-freetext" href="https://www.open-mpi.org/mailman/listinfo.cgi/users">https://www.open-mpi.org/mailman/listinfo.cgi/users</a>
Link to this post: <a class="moz-txt-link-freetext" href="http://www.open-mpi.org/community/lists/users/2016/06/29366.php">http://www.open-mpi.org/community/lists/users/2016/06/29366.php</a></pre>
    </blockquote>
    <br>
  </body>



<hr>
<ul>
<li>application/pkcs7-signature attachment: <a href="http://www.open-mpi.org/community/lists/users/att-29368/smime.p7s">S/MIME Cryptographic Signature</a>
</ul>
<!-- attachment="smime.p7s" -->
<!-- body="end" -->
<hr>
<ul class="links">
<!-- next="start" -->
<li><strong>Next message:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Previous message:</strong> <a href="29367.php">Ralph Castain: "Re: [OMPI users] Does Open MPI support manual launcher?"</a>
<li><strong>In reply to:</strong> <a href="29366.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<!-- nextthread="start" -->
<li><strong>Next in thread:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
<li><strong>Reply:</strong> <a href="29369.php">Rob Nagler: "Re: [OMPI users] Docker Cluster Queue Manager"</a>
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
